<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
</head>

<?php
$resultMessage = '';
if (isset($_POST['submit'])) {
    $name = htmlentities($_POST['name']);
    $mail = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);

    //Test for empty fields and real email

    if (!empty($name) && !empty($mail) && !empty($message)) {

        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

            //Create and send Message
            $headers = 'MIME-Version: 1.0'.'\r\n'.'Content-Type:text/html;charset=UTF-8'."\r\n";
            $headers .='From: '.$name.'<'.$mail.'>'."\r\n";

            $toEmail = 'admin@server1.flexihubs.com';
            $subject = 'You Have a New Message from SimonLowther.co.nz';
            $body = "You have a new message from SimonLowther.co.nz.  \n\n FROM: ".$name."\n EMAIL: ".$mail."\n\n".$message;
            
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
                <div>Phone: 021794443<br><br>
                    Email: simon@jlobservatory.com <br><br></div>
            </div><br><br>
            <div>
                <a href="https://GitHub.com/SimonLowther"><img src="/Resources/GitHub-Mark-32px.png">GitHub Page</img></a>
            </div>

            <div class="contact-form">

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <?php if($resultMessage !=''): ?>
                        <div class='<?php echo $resultMessageClass?>'><?php echo $resultMessage; ?></div>
                    <?php endif ?>
                    <label for="name">Name: </label><input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : '' ?>"></input>
                    <label for="email">Email: </label><input type="text" name="email" value="<?php echo isset($_POST['email']) ? $mail : '' ?>"></input>
                    <label for="text">Message: </label><textarea type="textarea" name="message" rows="10" columns="150"></textarea>
                    <button type="submit" name="submit" id="submit" >Send Message</button>
                </form>
            </div>
        </div>
    </div>
</body>