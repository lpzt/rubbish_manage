<?php
require_once 'config.php';

function connectDb(){
    return mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB);
}