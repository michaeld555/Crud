<?php

//logout da seção

session_start();
session_destroy();
header('location: /login/login.php');