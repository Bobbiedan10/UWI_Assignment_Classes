<?php
require 'LicenseUploadModel.php';
require 'LicenseUploadView.php';

class LicenseUpload extends Page
{
    public function makeModel() : Model
    {
        return new LicenseUploadModel(DB_USER, DB_PASS, DB_NAME, DB_HOST);
    }

    public function makeView() : AbstractView
    {
        return new LicenseUploadView();
    }
}