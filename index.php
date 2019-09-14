<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "VINOD SHIVRAJ VISHWA PRIYANKA AWS CLASS";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
     https://www.google.com/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fen%2Fthumb%2Fd%2Fdc%2FBaahubali_The_Beginning_Movie_Poster.jpg%2F220px-Baahubali_The_Beginning_Movie_Poster.jpg&imgrefurl=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FBaahubali%3A_The_Beginning&docid=l8qRlRN2dElgYM&tbnid=M-pxE-7wK-iG4M%3A&vet=10ahUKEwjOtczUs4nkAhVLK48KHfiKBpMQMwh3KAIwAg..i&w=220&h=326&bih=608&biw=1024&q=bahubali&ved=0ahUKEwjOtczUs4nkAhVLK48KHfiKBpMQMwh3KAIwAg&iact=mrc&uact=8

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>
