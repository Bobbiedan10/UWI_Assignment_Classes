<?php
require 'CoverNoteModel.php';
require 'CoverNoteView.php';

class CoverNote extends Page
{
    public function makeModel() : Model
    {
        return new CoverNoteModel(DB_USER, DB_PASS, DB_NAME, DB_HOST);
    }

    public function makeView() : AbstractView
    {
        return new CoverNoteView();
    }
}