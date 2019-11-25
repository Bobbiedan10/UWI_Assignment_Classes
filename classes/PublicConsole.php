<?php
require 'PublicConsoleModel.php';
require 'PublicConsoleView.php';

class PublicConsole extends Page
{
    public function makeModel() : Model
    {
        return new PublicConsoleModel(DB_USER, DB_PASS, DB_NAME, DB_HOST);
    }

    public function makeView() : AbstractView
    {
        return new PublicConsoleView();
    }
}