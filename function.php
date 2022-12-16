<?php
$msg = "";
foreach ($_GET as $key => $data) {
    $msg .= "$key:  $data | ";
};

// the message
// $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg, 70);

// send email
if (mail("leads@goinggly.com", "Enquiry form your website", $msg)) {
?><script>
        // alert("Mail Sent Successfully");
        location.href = "thankyou.php";
    </script><?php
            } else {
                ?><script>
        alert("No Mail Sent");
        location.href = "contact.php";
    </script><?php
            }
