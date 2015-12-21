# -*- mode: ruby -*-
# vi: set ft=ruby :

HOSTNAME = "si.dev"

Vagrant.configure("2") do |config|

  # use ubuntu 14.04 (pull from Atlas repo)
  config.vm.box = "ubuntu/trusty64"

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
