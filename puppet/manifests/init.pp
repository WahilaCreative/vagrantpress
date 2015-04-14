exec { 'apt_update':
  command => 'apt-get update',
  path    => '/usr/bin'
}

class { 'git::install': }
class { 'subversion::install': }
class { 'apache2::install': }
class { 'php5::install': }
class { 'mysql::install': }
class { 'wordpress::install': }
class { 'phpmyadmin::install': }

# install the search and replace db
# scripts
file { '/home/vagrant/wordpress/srdb':
  ensure => directory,
  owner => 'vagrant',
  group => 'www-data',
  mode => 0755,
  require => Class['wordpress::install']
}

file { '/home/vagrant/wordpress/srdb/index.php':
  owner => 'vagrant',
  group => 'www-data',
  mode => 0755,
  source => '/vagrant/files/srdb/index.php',
  require => File['/home/vagrant/wordpress/srdb']
}

file { '/home/vagrant/wordpress/srdb/srdb.class.php':
  owner => 'vagrant',
  group => 'www-data',
  mode => 0755,
  source => '/vagrant/files/srdb/srdb.class.php',
  require => File['/home/vagrant/wordpress/srdb']
}

file { '/home/vagrant/wordpress/srdb/srdb.cli.php':
  owner => 'vagrant',
  group => 'www-data',
  mode => 0755,
  source => '/vagrant/files/srdb/srdb.cli.php',
  require => File['/home/vagrant/wordpress/srdb']
}

