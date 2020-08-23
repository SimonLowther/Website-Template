<!--
Items to be done on this page
1. Add email address to the $toEmail field
2. Add your website name and URL into the $subject and $body fields where indicated below
3. Put your contact details into the HTML where indicated below

    -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<?php
$resultMessage = '';
if (isset($_POST['submit'])) {
    $name = htmlentities($_POST['name']);
    $mail = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);
    $honey = htmlentities($_POST['firstname']);

    //Test for empty fields and real email

    if (!empty($name) && !empty($mail) && !empty($message) && empty($honey)) {

        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

            //Create and send Message
            $headers = 'MIME-Version: 1.0'.'\r\n'.'Content-Type:text/html;charset=UTF-8'."\r\n";
            $headers .='From: '.$name.'<'.$mail.'>'."\r\n";

            $toEmail = '';  //Add email address where contact emails are to be sent
            $subject = 'You Have a New Message from addWebsiteNameHere';  //Add the website name here for enail formatting
            $body = "You have a new message from addWebsiteURLhere  \n\n FROM: ".$name."\n EMAIL: ".$mail."\n\n".$message; //add the website URL for correct email formatting
            
            if(mail($toEmail, $subject, $body, $headers)){
                //Email sent successfully
                $resultMessage = 'Your Message has been sent';
                $resultMessageClass = 'success';
            }else{
                //Email fails to be sent
                $resultMessage = 'Message not sent!';
                $resultMessageClass  = 'alert';
            }

        } else {
            //No vailid email address
            $resultMessage = 'Please enter a valid email address';
            $resultMessageClass = 'alert';
        }
    }  else {
        //Required fields missing
        $resultMessage = 'Please fill in all fields';
        $resultMessageClass = 'alert';
    }
}

?>

<body>

    <div class='contact-body-image'>
        <div class='contact-body'>
            <div class="details">
                <h3>Contact Details</h3>
                <div>Phone: <br><br> <!-- Add your name and phone number and email here --> 
                    Email:  <br><br></div>
            </div><br><br>
            
            <div class="contact-form">

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <?php if($resultMessage !=''): ?>
                        <div class='<?php echo $resultMessageClass?>'><?php echo $resultMessage; ?></div>
                    <?php endif ?>
                    <div class="sweet"><label for="firstname">FirstName: </label> <input type="text" name="firstname" value="<?php echo isset($_POST['firstname']) ? $honey : '' ?>"></input></div>
                    <label for="name">Name: </label><input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : '' ?>"></input>
                    <label for="email">Email: </label><input type="text" name="email" value="<?php echo isset($_POST['email']) ? $mail : '' ?>"></input>
                    <label for="text">Message: </label><textarea type="textarea" name="message" rows="10" columns="150"></textarea>
                    <button type="submit" name="submit" id="submit" >Send Message</button>
                </form>
            </div>
        </div>
    </div>
</body>
<footer>
    <script>$(document).ready(function(){$(".sweet").hide();})</script>
</footer>