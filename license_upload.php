<?php
/**
 * Create the registration page and functionality for the
 * vehicle registration system
 */
session_start();
require 'config.php';
require 'classes/Page.php';
require 'classes/Model.php';
require 'classes/AbstractView.php';
require 'classes/LicenseUpload.php';
require 'classes/Validator.php';
// create the registration page object
$licupload = new LicenseUpload;
// view indicates the HTML file to use and display
$view = $licupload->makeView();

//model stores all of our database queries
$model = $licupload->makeModel();

if(empty($_POST)) {
    
    $view->setTemplate('license_upload.tpl.php');
    $view->display();
}

else
{
    // 1. Validate the data if JavaScript didn't do it
    $validator = new Validator($_POST);
    $result = $validator->validate();
    // 2. If the data is invalid, get and display error messages
    if (!$result) { // validation failed, errors were generated
        $errors = $validator->getErrors();  // an array of strings
        $view->setTemplate('license_upload.tpl.php');
        $view->addVar('errors', $errors);
        $view->addVars($_POST);
        $view->display();
    }
// 3. If the data is valid, update the database and go to next page
    else { 
        $model->update('citizen', $_POST);
        header('Location:public_console.php');
    } 
}