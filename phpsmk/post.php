<form action="nav.php" method="post">
    email :
    <input type="email" name="email">
    password :
    <input type="password" name="password">
       <input type="Submit" name="kirim" value="Login">
</form>

<?php 
if (isset($_POST['kirim'])) {
    
    $email=  $_POST['email'];
$password= $_POST['password'];

echo $email;
echo '<br>';
echo $password;

}



?>