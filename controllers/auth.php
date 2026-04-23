<?php
session_start();
if (! isset($_SESSION['user']['email'])) {
    header('location: /login');
    exit();
}