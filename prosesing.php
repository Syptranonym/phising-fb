<?php
session_start();

$list_user = [
    [
        'username' => 'admin',
        'password' => 'admin'
    ]
];


$user = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];


$not_found = false;

foreach ($list_user as $key => $registered_user) {

    if ($registered_user['username'] == $user['username']) {

        if ($registered_user['password'] == $user['password']) {

            $_SESSION['login'] = true;
            $_SESSION['username'] = $user['username'];

            header("Location: result_account.php");
            break;
        } else {
            $_SESSION['error'] = 'Password anda salah';
            $not_found = true;
        }
    } else {
        $_SESSION['error'] = 'Password anda salah';
    }
}
if ($not_found == true) {
    header("Location: logout.php");
}
?>