<?php if(isset($_GET['question_id'])){


$question_id = $_GET['question_id'];

}

if(isset($_POST['qr_code']))
{
 $qr_code = $_POST['qr_code'];


 if($qr_code == $question_id){
    alert("that's correct answer");
 }
}
?>

