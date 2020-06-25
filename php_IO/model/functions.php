<?php

$PATH = "./data/content.txt";

function getContent() : array {
    global $PATH;
   $data = file_get_contents($PATH, true);
   return json_decode($data);
}

function pushContent($name, $surname) : bool {
    global $PATH;
      $arr = ["name" => $name, "surname" => $surname];
      $data = getContent();
      array_push($data, $arr);

      file_put_contents($PATH, json_encode($data));
      return true;
}