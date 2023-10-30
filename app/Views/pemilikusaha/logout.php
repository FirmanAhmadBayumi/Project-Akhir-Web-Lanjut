<?php
session_start();

require_once('config.php');

// logout
session_destroy();

header("Location: ". $config->base_url . "../index.php");