<?php
include_once "./inc/connection.php";
$sql = "INSERT INTO enquiry (name, email, phone, subject, message) VALUES(:name, :email, :phone, :subject, :message)";
$query = $db->prepare($sql);
if(isset($_POST['user-email']) && $_POST['user-email'] != ""){
  $valid = validator();
  $numValid = numChecker();
  $cleanInput = sanitize();
  if($valid === true && $numValid === true){
    $query->bindParam(':name',$cleanInput[0]);
    $query->bindParam(':email', $_POST['user-email']);
    $query->bindParam(':phone', $_POST['user-tele']);
    $query->bindParam(':subject',$cleanInput[1]);
    $query->bindParam(':message',$cleanInput[2]);
    $query->execute();
    echo "<script>alert('Enquiry successfully sent')</script>"; 
} 
    }else{
    return;
}

function validator(){
    if(filter_var($_POST['user-email'], FILTER_VALIDATE_EMAIL)){
        return true;
    }return false;
}
//current state doesn't store the 0 at the start of number, change to sanitize string then do if else statement for numbers only or return false.
$phone = preg_replace('/[^0-9+-]/', '', $_POST['user-tele']);
function numChecker(){
    if(strlen($_POST['user-tele']) === 11){
        return true;
    }return false;
}

function sanitize(){
   $formInputs = [$_POST['user'], $_POST['user-sub'], $_POST['sub-message']];
   $formInputsClean = [];
   foreach($formInputs as $input){
       $formInputsClean[] = filter_var($input, FILTER_SANITIZE_STRING);
   }return $formInputsClean;
}

?>