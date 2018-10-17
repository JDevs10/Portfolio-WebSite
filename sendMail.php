<?php
// Sending email
if (isset($_POST['submit'])){
    if ($_POST['userName'] == "" || $_POST['userEmail'] == "" || $_POST['userName'] == ""){
        header("Location: index.html");

    }else {
        $to = 'j-ldsxm18@hotmail.com';
        $from = $_POST['userEmail'];
        $userName = $_POST['userName'];
        $subject = 'Contact from Portfolio';
        $userMsg = $_POST['userMsg'];
        $message = $userName." wrote the following :"."\n\n".$userMsg;
        $headers = "From: ".$from;

        if (mail($to, $subject, $userMsg, $headers)) {
            header("Location: index.html");
        }
    }
}
?>