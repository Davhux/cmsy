<?php 

#For any problem about the email contact your hosting provider.

#set your email
$myemail = "youremail@gmail.com";
#end setting


$nicdark_form_booking_name = $_POST['nicdark_form_booking_name'];
$nicdark_form_booking_email = $_POST['nicdark_form_booking_email'];
$nicdark_form_booking_people = $_POST['nicdark_form_booking_people'];
$nicdark_form_booking_date = $_POST['nicdark_form_booking_date'];
$nicdark_form_booking_message = $_POST['nicdark_form_booking_message'];


if (empty ($nicdark_form_booking_email)) {   

    $nicdark_message = 'Email Is Mandatory !';
    echo $nicdark_message;

}else if(!filter_var($nicdark_form_booking_email, FILTER_VALIDATE_EMAIL) === true){

	$nicdark_message = 'Please Insert A Valid Email !';
    echo $nicdark_message;

}else{

	$nicdark_message = 'NOME : '.$nicdark_form_booking_name.' , EMAIL : '.$nicdark_form_booking_email.' , PEOPLE : '.$nicdark_form_booking_people.' , DATE : '.$nicdark_form_booking_date.' , MESSAGE : '.$nicdark_form_booking_message ;

    mail( $myemail , "FORM CONTACT - My Web Site", $nicdark_message );


    $nicdark_message = "Thanks For Contacting Us !";

    echo $nicdark_message;

}



?>