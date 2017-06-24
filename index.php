<?php

  require "vendor/autoload.php";
  $config = include "config.php";
  if(isset($_GET['r'])){
    require_once($_GET['r']."/index.php");
  }
