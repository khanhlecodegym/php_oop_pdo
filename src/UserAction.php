<?php

session_start();

require_once 'UserQuery.php';
require_once 'util.php';

$userQuery = new UserQuery;
$util = new Util;

// die(var_dump($customerQuery));

if(isset($_POST['action']) && $_POST['action'] == "register") {
    $name = $util->testInput($_POST['name']);
    $email = $util->testInput($_POST['email']);
    $password = $util->testInput($_POST['password']);
    $hpass = password_hash($password, PASSWORD_DEFAULT);

    if($userQuery->is_exist($email)) {
        echo $util->showMessage('danger', "Email $email is alreadly registered!!");
    } elseif($userQuery->register($name, $email, $hpass)) {
        echo 'register';
        $_SESSION['user'] = $email;
    } else {
        echo $util->showMessage('danger', 'Register Error');
    }
}

if(isset($_GET['read'])) {
    $customers = $customerQuery->read();
    // print_r($customers);
    $str = '';
    foreach ($customers as $cus) {
        $str .= '<tr>
                <td>' . $cus['id'] . '</td>
                <td>' . $cus['fname'] . '</td>
                <td>' . $cus['lname'] . '</td>
                <td>' . $cus['email'] . '</td>
                <td>' . $cus['phone'] . '</td>
                <td>
                <a href="#" id="' . $cus['id'] . '" class="btn btn-primary">Edit</a>
                <a href="#" id="' . $cus['id'] . '" class="btn btn-danger">Delete</a>
                </td>
                </tr>';
                
    }
    echo $str;
}