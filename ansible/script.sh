#!/usr/bin/env bash

#yum install wget
#wget dl.fedoraproject.org/pub/epel/6/x86_64/epel-release-6-8.noarch.rpm
#rpm -ivh epel-release-6-8.noarch.rpm
#sudo yum -y update
#sudo yum -y install ansible

#intall elasticsearch
wget https://artifacts.elastic.co/downloads/elasticsearch/elasticsearch-5.0.1.rpm
sha1sum elasticsearch-5.0.1.rpm
sudo rpm --install elasticsearch-5.0.1.rpm

#sudo chkconfig --add elasticsearch
### You can start elasticsearch service by executing
#sudo service elasticsearch start

# Setup Ansible for Local Use and Run
#cp /opt/fcb/sm/vagrant/ansible/inventories/dev /etc/ansible/hosts -f
#chmod 666 /etc/ansible/hosts


#sudo ansible-playbook --private-key=~/.vagrant.d/insecure_private_key -u vagrant -i /var/www/sm2/ansible/inventories/dev /var/www/sm2/ansible/playbook.yml

