<?php
session_start();

session_destroy();
header('Location: ../13_sessions.php');
