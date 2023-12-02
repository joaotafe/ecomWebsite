<?php

function gen_id($length) {
  $id = 0;
  $chars = "012345678936792572378883256937";
  for($i = 0; $i < $length; $i++) {
    $x = rand(0, strlen($chars) -1);
    $id.= $chars[$x];
  }
  return $id.time();
}

// function gen_line_id($length) {
//   $id = '';
//   $chars = "012345678936792572378883256937";

//   for ($i = 0; $i < $length; $i++) {
//       $x = rand(0, strlen($chars) - 1);
//       $id .= $chars[$x];
//   }

//   // Use a portion of the current timestamp
//   $timestamp = substr(time(), -5);

//   // Generate a unique integer
//   $unique_int = (int)($id . $timestamp);

//   // Ensure it's within the INT range
//   $unique_int = $unique_int % PHP_INT_MAX;

//   return $unique_int;
// }


?>
