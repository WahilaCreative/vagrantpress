# Install latest Wordpress

class wordpress::install {

  # Create the Wordpress database
  exec { 'create-database':
    unless  => '/usr/bin/mysql -u root -pvagrant wordpress',
    command => '/usr/bin/mysql -u root -pvagrant --execute=\'create database wordpress\'',
  }

  # Create the wordpress user and give it permissions to the wordpress database
  exec { 'create-user':
    unless  => '/usr/bin/mysql -u wordpress -pwordpress wordpress',
    command => '/usr/bin/mysql -u root -pvagrant --execute="GRANT ALL PRIVILEGES ON wordpress.* TO \'wordpress\'@\'%\' IDENTIFIED BY \'wordpress\'"',
  }

  # Get a new copy of the latest wordpress release
  # FILE TO DOWNLOAD: http://wordpress.org/latest.tar.gz
  exec { 'download-wordpress': #tee hee
    command => '/usr/bin/wget http://wordpress.org/latest.tar.gz',
    cwd     => '/home/vagrant/',
    creates => '/home/vagrant/latest.tar.gz'
  }

  # This directory will have been created by vagrant when the machine
  # is first created/started (as we are mounting certain folders within 
  # this structure: themes/x plugins/x). just reset the permissions here 
  # and we should be good to go
  exec { 'wordpress-permissions':
    cwd     => '/home/vagrant/',
    command => '/bin/chown -R vagrant:www-data wordpress'
  }

  # extract the wordpress archive
  exec { 'untar-wordpress':
    cwd     => '/home/vagrant/',
    command => '/bin/tar -xzf latest.tar.gz',
    require => Exec['download-wordpress', 'wordpress-permissions'],
    user => vagrant
  }

  # Copy a working wp-config.php file for the vagrant setup
  file { '/home/vagrant/wordpress/wp-config.php':
    source => 'puppet:///modules/wordpress/wp-config.php',
    require => Exec['untar-wordpress'],
  }
}
