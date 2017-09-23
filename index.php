<?php
session_start();
require('Admin/core/Initialize.php');
require('carredsign/models/functions.php');
define(SERVER_ROOT,$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/');
define(SERVER_NAME,$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/carredsign/');
define(ADMIN_SERVER,$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/Admin/');
define(EVENT_ROOT,'views'.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'events');
define(ADMIN_FOLDER,$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'Admin');

$database = Initialize::database();
dispatcher();

	?>