<?php
session_start();
require 'config.php';
require 'classes/Page.php';
require 'classes/Model.php';
require 'classes/AbstractView.php';
require 'classes/PublicConsole.php';
require 'classes/Validator.php';

$publicConsole = new PublicConsole;
// view indicates the HTML file to use and display
$view = $publicConsole->makeView();
$model = $publicConsole->makeModel();


if(!isset($_SESSION["authenticated_user"]))
{
    header("Location: index.php");
}
else
{
    $view->setTemplate('public_console.tpl.php');
    $view->display();
}
