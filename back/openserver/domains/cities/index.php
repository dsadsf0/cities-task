<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Headers: *");
  $db = mysqli_connect('localhost', 'root', '', 'citiesdb');

  $query = "SELECT * FROM cities";
  $res = mysqli_query($db, $query);
  $data = mysqli_fetch_all($res, 1);
  $response = json_encode($data);
  echo $response
?>