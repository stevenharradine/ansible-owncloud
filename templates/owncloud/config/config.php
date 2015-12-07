<?php
$CONFIG = array (
  'instanceid' => '{{ owncloud_instanceid.stdout }}',
  'passwordsalt' => '{{ owncloud_passwordsalt }}',
  'secret' => '{{ owncloud_secret }}',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => '{{ owncloud_external_ip }}',
  ),
  'datadirectory' => '{{ owncloud_datadirectory }}',
  'overwrite.cli.url' => 'http://localhost',
  'dbtype' => 'mysql',
  'version' => '8.2.1.4',
  'dbname' => '{{ project }}',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'dbuser' => '{{ project }}',
  'dbpassword' => 'secure_password',
  'logtimezone' => 'UTC',
  'installed' => {{ owncloud_installed.stdout }},
);
