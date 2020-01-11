<?php

function segitia($num)
{

  echo "<hr>";

  for ($i = 1; $i <= $num; $i++) {
    for ($j = $i; $j >= 1; $j--) {
      echo $j;
    }
    echo "<br>";
  }
}
