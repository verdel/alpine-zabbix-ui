<?php
// Zabbix GUI configuration file
global $DB;
$DB["TYPE"]          = 'MYSQL';
$DB["SERVER"]   = getenv("DB_HOST");
$DB["PORT"]          = getenv("DB_PORT");
$DB["DATABASE"]   = 'zabbix';
$DB["USER"]    = getenv("DB_USER");
$DB["PASSWORD"]   = getenv("DB_PASS");
// SCHEMA is relevant only for IBM_DB2 database
$DB["SCHEMA"]   = '';
$ZBX_SERVER          = getenv("ZABBIX_SERVER");
$ZBX_SERVER_PORT  = getenv("ZABBIX_PORT");
$ZBX_SERVER_NAME  = '';
$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
?>