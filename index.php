<?php


require_once("course/2dv610/Settings.inc");


require_once("Settings.php");
require_once("src/controller/MasterController.php");


session_start();



$content = \controller\MasterController::doControll(); 
//

require_once("static/HTML_Layout.inc");


