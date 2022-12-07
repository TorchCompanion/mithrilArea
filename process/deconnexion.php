<?php
session_start();
session_unset();
    echo "You've been disconnected.";
header('refresh: 2; url=../index.php');