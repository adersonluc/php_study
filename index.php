<?php

  require "vendor/autoload.php";
  if(isset($_GET['r'])){
    require_once($_GET['r']."/index.php");
  }
