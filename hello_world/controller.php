<?php
  $mongo = new MongoDB\client("mongodb://admin:admin@localhost:27017");
  $collection = $mongo->local->teste;
  $result = $collection->find();
  // $insert = $collection->insertOne([
  //
  //   "filho" => [$_GET['f1'], $_GET['f2']]
  //
  // ]);
  $array = array();
  foreach ($result as $key=>$id) {
    $array[] = $id['filho'];
  }
  print_r(json_encode($array));
?>
