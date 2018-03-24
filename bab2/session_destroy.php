<?php
session_start();
session_destroy();
unset($_SESSION);
define("URL", "http://acer-pc/belajar/");

header('location:' . URL);
?>