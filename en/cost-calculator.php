<?php 


$nicdark_value_accomodation = $_POST['value_accomodation']; 
$nicdark_value_person = $_POST['value_person']; 
$nicdark_value_day = $_POST['value_day']; 
$nicdark_value_season = $_POST['value_season']; 


//do operations

$primostep = $nicdark_value_accomodation * $nicdark_value_person * $nicdark_value_day;

$secondostep = $primostep * ($nicdark_value_season/100);

$terzostep = $primostep + $secondostep;

$nicdark_ajax_cost_calculator_result = $terzostep;


//return value
echo $nicdark_ajax_cost_calculator_result;


?>