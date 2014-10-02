#Install MySQL

class mysql::install {

  $password = 'vagrant'

  package { [
      'mysql-client',
      'mysql-server',
    ]:
    ensure => installed,
  }

  # gives us a handle on the mysql server service so that 
  # we can restart it n'at
  service { 'mysqld':
    ensure => running,
    provider => 'init',
    name => 'mysql'
  }

  exec { 'Set MySQL server\'s root password':
    subscribe   => [
      Package['mysql-server'],
      Package['mysql-client'],
    ],
    refreshonly => true,
    unless      => "mysqladmin -uroot -p${password} status",
    path        => '/bin:/usr/bin',
    command     => "mysqladmin -uroot password ${password}",
  }

  # set the mysql bind address (so we can connect from outside the machine)
  exec { 'set-bind-address':
    command => '/bin/sed -i "s/bind-address.*/bind-address = 0.0.0.0/" /etc/mysql/my.cnf',
    user => root,
    notify  => Service['mysqld']
  }
}
