<?php
try {
     $db = new PDO("mysql:hostname=localhost;dbname=organicK", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>