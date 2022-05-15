<?php

//logout da seção

session_start();
session_destroy();
header('location: ../pages/login.php');
