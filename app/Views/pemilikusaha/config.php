<?php

class Config {
    public $base_url;

    public function __construct() {
        $this->base_url = "http://localhost/ADSI/PemilikUsaha/";
    }
}

$config = new Config();