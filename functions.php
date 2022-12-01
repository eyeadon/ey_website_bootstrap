<?php

function testFunction ($str) {
  echo $str;
}

function fileNameCheck($filePath) {

  if (strpos($filePath, "graphic") !== false || strpos($filePath, "illustration") !== false || strpos($filePath, "my_websites") !== false) {
      return "../";
  }
}

function checkForInteriorFolder($filePath) {
  return (strpos($filePath, "graphic") !== false || strpos($filePath, "illustration") !== false || strpos($filePath, "my_websites") !== false) ? true : false;
}


?>