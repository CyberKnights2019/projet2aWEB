<?php

include 'C:\wamp64\www\cores\employerC.php';

$emp= new employer(75757575,"ben ahmed","salah",50,20);
$empc=new employerC();
$empc->afficherEmployer($emp);
$empc->calculerSalaire($emp);

?>