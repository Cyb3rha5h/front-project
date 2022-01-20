<?php
/**
 * Created by PhpStorm.
 * User: MohammadAminNayebi
 * Date: 1/20/2022
 * Time: 11:24 AM
 */

foreach ($_ as $k=> $v)
    $$k = $v;
/*
echo $name . '<hr>';
echo $lastname .'<hr>';
echo $email . '<hr>';
echo $website . '<hr>';
echo $country . '<hr>';
echo $birthday . '<hr>';
echo $message;

var_dump($_GET);
*/

$dbc = new mysqli('localhost', 'root','')
$dbc -> select_db('datagettingtest');
$sql = "INSERT INTO userdata (name,lastname,email,website,country,birthday,message)
VALUES ('{$name}','{$lastname}','{$email}','{$website}','{$country}','{$birthday}','{$message}')";

$result = $dbc -> query( $sql );
if ($dbc -> error)
    echo $dbc -> error;
else
    echo 'Your Message successfully sent to us'
$dbc -> close();

    ?>