<?php
function test($data)
{
    trim($data);
    stripslashes($data);
    htmlspecialchars($data);
    return $data;
}
$name = test($_POST["name"]);
$email = test($_POST["email"]);
$exp = test($_POST["exp"]);
$to = "Shootingstarts@gmail.com";
$subject = "Shootingstarts - User-Experience Form";
$message = "Name : $name  E-mail : $email  Query : $query";
$header = "From: $email\n";
mail($to,$subject,$message,$header);
echo "<br>Thank you for your input. We hope you liked it. Thanks.";
?>
<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"></br></br>Go Back to website.</a>
