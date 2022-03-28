<?php
session_start(); 
if($_SESSION['logedin']){
    echo "loged in correct, yay!";
}