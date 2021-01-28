<?php

include_once 'second_handler.php';

//if their are errors display them
if (isset($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:#ff0000'>$error</p>";
    }
}

?>

<form action='' method='post'>
    <p><label for="phone">Phone</label>
    <br>
    <input placeholder="+36 (30) 999-9999" type='text' name='phone' id="phone" value=''></p>
    <p><label for="email">Email</label>
    <br>
    <input type='text' name='email' id="email" value=''></p>
    <p><input type='submit' name='submit' value='Submit'></p>
</form>

<a href="../index.php">Go back</a>