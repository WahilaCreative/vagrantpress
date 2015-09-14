# -*- mode: ruby -*-
# vi: set ft=ruby :

# THEME_NAME = "my_theme"
# PLUGIN_NAME = "my_plugin"
HOSTNAME = "si.dev"

Vagrant.configure("2") do |config|

  # use ubuntu 14.04
  config.vm.box = "trusty64"
  config.vm.box_url = "http://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-amd64-vagrant-disk1.box"

  # setup a local hostname for this machine
  config.vm.hostname = HOSTNAME

  # set the local network address for this vm (you can set this 
  # in your hosts file, so yeah, that is pretty awesome, right?)
  config.vm.network :private_network, ip: "192.168.50.4"

  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "puppet/manifests"
    puppet.module_path = "puppet/modules"
    puppet.manifest_file  = "init.pp"
    puppet.options="--verbose --debug"
  end

  # setup synced folders for the themese and plugin directories
  # config.vm.synced_folder "theme/", File.join("/home/vagrant/wordpress/wp-content/themes", THEME_NAME), owner: "vagrant", group: "www-data"
  # config.vm.synced_folder "plugin/", File.join("/home/vagrant/wordpress/wp-content/plugins", PLUGIN_NAME), owner: "vagrant", group: "www-data"

  # provide access to the plugin and uploads directories on the guest OS
  config.vm.synced_folder "plugins/", File.join("/home/vagrant/wordpress/wp-content/plugins"), owner: "vagrant", group: "www-data", create: true
  config.vm.synced_folder "uploads/", File.join("/home/vagrant/wordpress/wp-content/uploads"), owner: "vagrant", group: "www-data", create: true
  config.vm.synced_folder "themes/", File.join("/home/vagrant/wordpress/wp-content/themes"), owner: "vagrant", group: "www-data", create: true

  # Fix for slow external network connections
  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
  end
end
