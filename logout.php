<?php
session_name("handicapps");
session_start();
session_destroy();
header('Location: index.php');
?>