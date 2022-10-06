<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
// define variables and set to empty values
$nameErr = $emailErr = $superheroErr = $websiteErr = "";
$name = $email = $superhero = $comment = $website = "";
$to = $message = $headers = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameErr = "Only letters and white space allowed";
}
}
 
if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
}
 
if (empty($_POST["website"])) {
$website = "";
} else {
$website = test_input($_POST["website"]);
// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
$websiteErr = "Invalid URL";
}
}

if (empty($_POST["comment"])) {
$comment = "";
} else {
$comment = test_input($_POST["comment"]);
}

if (empty($_POST["superhero"])) {
$superheroErr = "superhero is required";
} else {
$superhero = test_input($_POST["superhero"]);
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return$data;
}
?>

    <h1>PHP Form Validation Example</h1>

    <p>
        <span class="error">* required field</span>
    </p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <h2>Name:</h2>

        <input type="text" name="name" value="<?php echo $name;?>">

        <span class="error">* <?php echo $nameErr;?></span>

        <br>
        <br>

        <h2>E-mail: </h2>

        <input type="text" name="email" value="<?php echo $email;?>">

        <span class="error">* <?php echo $emailErr;?></span>

        <br>
        <br>

        <h2>Website:</h2>

        <input type="text" name="website" value="<?php echo $website;?>">

        <span class="error"><?php echo $websiteErr;?></span>

        <br>
        <br>

        <h2>Comment:</h2>

        <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

        <br>
        <br>

        <h2>Superhero:</h2>

        <input type="radio" name="superhero"
            <?php if (isset($superhero) && $superhero=="Wonder Women") echo "checked";?> value="female">

        <h2>Wonder Women</h2>

        <input type="radio" name="superhero" <?php if (isset($superhero) && $superhero=="Batman") echo "checked";?>
            value="male">

        <h2>Batman</h2>

        <input type="radio" name="superhero"
            <?php if (isset($superhero) && $superhero=="I like Marvel more") echo "checked";?> value="other">

        <h2>Other</h2>

        <span class="error">* <?php echo $superheroErr;?></span>

        <br>
        <br>

        <input type="submit" name="submit" value="Send Away">

        <input type="reset" value="Change">

    </form>



    <?php

// echo "<h2>Your Input:</h2>";
// echo $name;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $website;
// echo "<br>";
// echo $comment;
// echo "<br>";
// echo $superhero;
// echo "<br>";

if (isset($_POST["submit"])){
$to = " jvalle20@bruinmail.slcc.edu ";
$headers = "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Cc: zbean1@slcc.edu \r\n";
$headers .= "Bcc: zbean1@slcc.edu \r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$email_body = "You have received a new message from the $name.\n"."They are a $superhero.\n"."Their website is $website.\n"."They comment:\n $comment.";
//mail(param1,param2,param3,param4...)
mail($to, " Website Request ", $email_body, $headers);
echo "Thank you for contacting us. We will be in touch with you very soon.";
}
?>