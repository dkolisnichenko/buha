<?php
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';
require_once 'classes/Table.php';
require_once 'classes/DB.php';
require_once 'classes/Balance.php';
require_once 'classes/User.php';

// запускаем маршрутизатор

 if ($_SESSION['auth'] !='Yes')
  Route::login();  else Route::start(); 