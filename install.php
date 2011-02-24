<?php
echo "<link href=\"styles.css\" rel=\"stylesheet\" type=\"text/css\">";
echo "<div class=\"header\">Comment Script v1.0 Install</div>";

if(isset($_POST['setup'])){
$myFile = "config.php";
$fh = fopen($myFile, 'w') or die("Can't open file. Make sure it is chmodded 777.");
$stringData = "<?php
define('TYPE','$_POST[radio]');
define('EMAIL','$_POST[fixedemail]');
?>";
fwrite($fh, $stringData);
fclose($fh);
echo "Writing config file => OK.<br>";
echo "Please delete this install file.";
}
if(!isset($_GET['stage'])){
?>
<link href="styles.css" rel="stylesheet" type="text/css">
<form name="setup" method="post" action="install.php?stage=2">
<input name="radio" type="radio" value="Editable"> => Editable => Choose if the end-user can email anyone or just one fixed amail address. <br />
<input name="radio" type="radio" value="Fixed"> => Fixed
<br />
<input type="text" name="fixedemail"> => Specify the email address to send mail to. Leave this field blank if you want the e-mail address field to be editable.
<br />
<input name="setup" type="submit" value="Setup">
</form>
<?php
}
?>
<br />
Powered by <a href="http://www.noisyscripts.tk/mailer/mailer.php" alt="Noisyscanner's mailer script">Noisyscanner's mailer script V1.0</a>
