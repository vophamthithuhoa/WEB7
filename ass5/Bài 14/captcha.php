<?php
session_start();
$string = md5(time());
$string = substr($string, 0, 6);
$_SESSION['captcha'] = $string;
$img = imagecreate(150,50);
$background = imagecolorallocate($img, 0,0,0);
$text_color = imagecolorallocate($img, 255,255,255);
imagestring($img, 4,40,15, $string, $text_color);
header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?>
<?php
session_start();
if(isset($_POST['submit'])){
    $input = $_POST['input'];
    if($input == $_SESSION['captcha'])
    $_SESSION['message'] = "* Right captcha !!!";
    else{
    $_SESSION['message'] = "* Wrong captcha !!!";
    }
    }
    ?>
    <p id="message">
<?php 
if(isset($_SESSION['message'])){
echo $_SESSION['message'];
unset($_SESSION['message']);
} 
?>
</p>