<?php
require 'AdminIndexModel.php';
require 'AdminIndexView.php';

class AdminIndex extends Page
{
    public function makeModel() : Model
    {
        return new AdminIndexModel(DB_USER, DB_PASS, DB_NAME, DB_HOST);
    }

    public function makeView() : AbstractView
    {
        return new AdminIndexView();
    }
}