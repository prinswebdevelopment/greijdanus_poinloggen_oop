<?php
session_start();

require 'import.php';




$import = new Import();

ob_start(array('template', 'callback'));

$import->getBaseTemplate();

ob_end_flush();