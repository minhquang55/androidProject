<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['price']) && isset($_POST['type']) && isset($_POST['note']) && isset($_POST['date'])) {
  if ($db->dbConnect()) {
      if ($db->add("list_spend", $_POST['price'], $_POST['type'], $_POST['note'], $_POST['date'])) {
          echo "Add Success";
      } else echo "Add khong thanh cong";
  } else echo "Error: Database connection";
} else echo "All fields are required";
?>
