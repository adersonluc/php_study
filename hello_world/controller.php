<?php
  $mongo = new MongoDB\client("mongodb://admin:admin@localhost:27017");
  $collection = $mongo->local->teste;
  // $result = $collection->find();

  $insert = $collection->insertOne([

    "filho" => [$_GET['f1'], $_GET['f2']]

  ]);
?>
