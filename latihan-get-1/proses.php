<?php
if (isset($_GET["keyword"]) && isset($_GET["fullname"])) {
  echo "<h2>Hasil Pencarian </h2> " . $_GET["keyword"];

  echo "<h2>Nama Lengkap </h2>" . $_GET["fullname"];
}
