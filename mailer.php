<?php
include 'config.php';
echo "<div class=\"header\">Mailer:</div>";
if (isset($_POST['send']) && $_POST['send'] == 'Send'){
if (!isset($_POST['to'])){
die("Who are we mailing?");
}
if (!isset($_POST['subject'])){
die("What's this email's subject, then?");
}
if (!isset($_POST['message'])){
die("What message are you trying to get out?");
}
if(!isset($_POST['from'])){
$from = "Annonymous";
}else{
$from = $_POST['from'];
}
mail("$_POST[to]","$_POST[subject]", "$_POST[message]","From: $from") or die ("Couldn't send email!");
echo "<div class=\"notice\">Email sent!</div>";
}
$email = EMAIL;
?>
<link href="styles.css" rel="stylesheet" type="text/css">
<div class="backbox">
<form method="POST">
To:<? if(TYPE == "Fixed"){echo"<input type=\"text\" name=\"to\" value=\"$email\" disabled/>";}else{echo"<input type=\"text\" name=\"to\" />";}?>
<br />
Subject:<input type="text" name="subject" />
<br />
From:<input type="text" name="from" /> If left blank, message will be sent from "Annonymous".
<br />
Message:
<br />
<textarea name="message" rows="20" cols="60">
</textarea>
<br />
<input name="send" type="submit" value="Send" />
</form>
</div>
<br />Powered by <a href="http://www.noisyscripts.tk/mailer/mailer.php" alt="Noisyscanner's mailer script">Noisyscanner's mailer script V1.0</a>
