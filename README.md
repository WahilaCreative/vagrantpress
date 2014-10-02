# VagrantPress

*VagrantPress* is a packaged development environment for developing WordPress themes and modules.
I initially created this project to aid in developing child modules for a WordPress blog.

# What's Installed

+ Ubuntu Trusty (14.04)
+ Wordpress 4.0
+ Mysql
+ Php
+ Phpmyadmin
+ Subversion
+ PEAR
+ Xdebug
+ PHPUnit
+ phploc
+ phpcpd
+ phpdcd
+ phpcs
+ phpdepend
+ phpmd
+ PHP_CodeBrowser
+ WordPress sniffs for phpcs

# Prerequisites

+ [Vagrant](http://www.vagrantup.com/downloads.html)
+ [Virtualbox](https://www.virtualbox.org/wiki/Downloads)
+ [vagrant-hostsupdater plugin](https://github.com/cogitatio/vagrant-hostsupdater) (optional)

## Getting Started

This is a fairly simple project to get up and running.
The procedure for starting up a working WordPress is as follows:

1. Clone the project.  (There’s only master branch.)
2. Run the command `vagrant up`
3. Open your browser and point [192.168.50.4](http://192.168.50.4) (or `HOSTNAME` if you have the [vagrant-hostsupdater plugin](https://github.com/cogitatio/vagrant-hostsupdater) installed)

## Working with the environment

### General Credentials

### DB credentials (username/password):

* **Wordpress DB**: wordpress/wordpress
* **Root**: root/vagrant

### Shared Directories
Both the *theme* and *plugin* directories are automatically mounted in the guest operating system using 
the `THEME_NAME` and `PLUGIN_NAME` variables (defined in the *Vagrantfile*) as their enclosing directory within the *themes* and *plugins* 
directories, respectively, within the guest OS.

Access is also provided to the *plugins* and *uploads* directories on the guest OS (mounted on the host in the repository).

### Automatic Hostname Registry
If you have the [vagrant-hostsupdater plugin](https://github.com/cogitatio/vagrant-hostsupdater) installed, an 
entry will automatically be added to your */etc/hosts* file to point to the guest machine's address. The 
hostname that the machine uses is set by the `HOSTNAME` variable in the Vagrantfile.

## A Few Details

* If you're needing a password (for anything - including mysql, it should be `vagrant`)

## Getting Help

Feel free to file an issue, create a pull request, or contact me at [my website][chadthompson].

[chadthompson]: http://chadthompson.me
