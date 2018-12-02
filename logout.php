<?php

session_start();
session_unset();
session_destroy();
echo"<script>alert('You Are Logout');</script>";
echo "<script>window.location.assign('homepage.php');</script>";
