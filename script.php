<?php

session_start();

if (isset($_POST['submit'])) {
    $_SESSION['color'] = $_POST['choose-color'];
    header('Location: index.php');
}

