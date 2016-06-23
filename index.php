<?php

require 'vendor/autoload.php';

use SDPSearch\Application;

$client = \ElasticSearch\ClientBuilder::create()->build();

Application::init(new \Slim\App());
