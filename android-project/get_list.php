<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {
  $row = $db->getList("list_spend");
  echo "id: " . $row["id"]. " - Price: " . $row["price"]. " " . $row["note"]. " " . $row["date"] . "<br>";
} else echo "Error: Database connection";
?>
