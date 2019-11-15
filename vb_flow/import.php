<?php

class Import {

    public function __construct()
    {
        require 'libraries/Template.php';
    }

    public function getBaseTemplate()
    {
        require 'template/base.php';
    }
}
