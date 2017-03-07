<?php
function test_input($data)
{
    trim($data);
    stripslashes($data);
    htmlspecialchars($data);
    return $data;
}
$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$exp = test_input($_POST["exp"]);
$date = test_input($_POST["date"]);
$to = "Shootingstarts@gmail.com";
$subject = "Shootingstarts - Contact-Us";
$message = "Name : $name  E-mail : $email  Query : $query  Date : $date";
$header = "From: $email\n";
mail($to,$subject,$message,$header);
echo "<br>Thank you for your input. We will be back to you soon.";
?>
<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"></br></br>Go Back to website.</a>