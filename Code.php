<?php
session_start();
$_SESSION ['page'] = 'code';
require_once('portfolio.php');
exit();