<?php
$n = 0;
try {
  if ($n <= 0) {
    throw new Exception("Enter the valid number.");
  } else {
    echo 2 / $n;
  }
} catch (Exception $e) {
  echo $e->getLine();
} finally {
  echo "<br> Successfully excuted";
}
