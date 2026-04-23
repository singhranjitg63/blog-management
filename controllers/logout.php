<?php

$_SESSION = [];
session_destroy();

$primes = session_get_cookie_params();
setcookie('PHPSESSID', '', time() - 3600, $primes['path'], $primes['domain'], $primes['secure'], $primes['httponly']);

header('location:/login');
exit();