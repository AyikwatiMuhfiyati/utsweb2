<?php

$hostDB = 'ec2-54-164-40-66.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'd46csboqv904ls';
$userDB = 'xosjcepgfajoum';
$pwDB = '03cec93119805c5669e550825ea40e480388c6667a67cb9a6d3282069acc5693';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($connection){

}else{
 
}
?>