[![Licence](https://img.shields.io/badge/Licence-ISC-blue.svg)](https://opensource.org/licenses/ISC)
[![Platforms](http://img.shields.io/badge/platforms-ubuntu-lightgrey.svg)](#)
[![Role](https://img.shields.io/ansible/role/6269.svg)](https://galaxy.ansible.com/detail#/role/6269)
[![Codacy Badge](https://api.codacy.com/project/badge/grade/d64db7a1ce8145799769f675afa7439d)](https://www.codacy.com/app/stevenharradine/ansible-owncloud)

# ansible-owncloud

[Ansible](http://www.ansible.com/) role to install and configure owncloud

Tunables
--------
* `owncloud_external_ip` (array of IPs) - The list of ip addresses owncloud will allow access
* `owncloud_datadirectory` (string) - location of data directory
* `owncloud_database_type` (string) - sql engine type (mysql, psql, sqlite)
* `owncloud_admin_user` (string) - administrators login name
* `owncloud_admin_password` (string) - administrators password (keep in a vault)

Example Playbook
----------------
    - hosts: servers
      roles:
         - role: stevenharradine.owncloud

Contributors
------------
* Steven Harradine
