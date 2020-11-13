<?php

class Import {

    public function __construct()
    {
        require 'libraries/Template.php';
        require 'libraries/Router.php';
    }

    public function getBaseTemplate()
    {
        require 'template/base.php';
    }

    public function getLibrary($library) {
        require 'libraries/' . $library . '.php';
    }
}
