<?php 

#For any problem about the email contact your hosting provider.

#set your email
$myemail = "campingmerrysuryonne@yahoo.com";
#end setting


$nicdark_form_footer_email = $_POST['nicdark_form_footer_email'];
$nicdark_form_footer_message = $_POST['nicdark_form_footer_message'];


if (empty ($nicdark_form_footer_email)) {   

    $nicdark_message = 'Email Is Mandatory !';
    echo $nicdark_message;

}else if(!filter_var($nicdark_form_footer_email, FILTER_VALIDATE_EMAIL) === true){

	$nicdark_message = 'Please Insert A Valid Email !';
    echo $nicdark_message;

}else{

	$nicdark_message = 'EMAIL : '.$nicdark_form_footer_email.' , MESSAGE : '.$nicdark_form_footer_message ;

    mail( $myemail , "FORM CONTACT - My Web Site", $nicdark_message );


    $nicdark_message = "Thanks For Contacting Us !";

    echo $nicdark_message;

}



?>