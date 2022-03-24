<?php

require_once 'website.php' ;

$website = new Website( $_GET['site'] ) ;

require_once $website->getIncludePath();
