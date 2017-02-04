<?php
$host="localhost"; // Host name
$username="joonsu5_emo"; // Mysql username
$password="password123"; // Mysql password
$db_name="joonsu5_emo"; // Database name
$tbl_name="guestbook"; // Table name

// Connect to server and select database.
$stmt = $dbh->prepare("INSERT INTO :tbl_name (name, comment) VALUES (:name, :comment)");

$stmt->bindParam(':tbl_name', $tbl_name);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':comment', $comment);

// insert one row
$name = 'testest';
$comment = 'this is awesome';
$stmt->execute();

mysql_close();
?>
