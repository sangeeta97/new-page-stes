<?php 
if(isset($_POST['submit'])){
    $to = "binf@boku.ac.at"; // this is your Email address
    $from = "binf@boku.ac.at"; // this is the sender's Email address
    $first_name = $_POST['First Name'];
    $last_name = $_POST['Last Name'];
    $Email = $_POST['email-Address'];
    $PIname = $_POST['PI Name'];
    $Organization_Name = $_POST['Organization Name'];
    $Funding = $_POST['Funding'];
    $Project_title = $_POST['Project Title'];
    $Domain_Name = $_POST['Domain Name'];
    $Address1 = $_POST['Address1'];
    $Address2 = $_POST['Address2'];
    $message = $_POST['message'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";. $_POST['Address1']. "\n\n"
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['email-Address']. "\n\n" . $_POST['PI Name']. "\n\n" . $_POST['Organization Name']. "\n\n" . $_POST['Funding']. "\n\n" . $_POST['Project Title']. "\n\n" . $_POST['Domain Name']. "\n\n" . $_POST['Address1']. "\n\n" . $_POST['message'];
    $message2 = "Thanks for filling the form we will get back Soon! " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
