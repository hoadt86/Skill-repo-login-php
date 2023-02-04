<!DOCTYPE html>

<?php
require_once("user.php");

session_start();

// if(!isset($_SESSION['email'])){
//     header('location:login.php');
// }

//Validate form:
// Chưa nhập email
// Email không đúng định dạng
// Chưa nhập Password
// Password không được nhập quá 20 ký tự
// Thông tin Email hoặc Password chưa đúng


if (isset($_POST['loginbutton'])) {
    $errors = [];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //Validate email
    if(empty(trim($email))){
        echo $errors['email']['required'] = 'Chưa nhập password';
    }else{
        if(strlen(trim($email))>20){
            echo $errors['email']['invalid'] = 'Email không đúng định dạng';
            
        }
    }

    //validate password
    if(empty(trim($password))){
        echo $errors['password']['required'] = 'Chưa nhập email';
    }else{
        if(!filter_var(trim($password),FILTER_VALIDATE_EMAIL)){
            echo $errors['password']['max'] = 'Password không được nhập quá 20 ký tự';
        }
    }

    if($email=='hoa.dang@alobridge.com'&& $password=='12345678'){
        $_SESSION['email'] = $email;
        header('location:home.php');
    }else{
        echo $errors['emailandpassword']= 'Thông tin Email hoặc Password chưa đúng';
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill-repo-login-screen</title>
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <div class="background">
        <div class="img">
            <div class="background-img"></div>
        </div>

        <div class="form">
            <span class="title">Skill-Repo</span>
            <span class="sub-title">クラウド型スキルシート管理webシステム</span>
            <form action="" method="post">
                <form action="" method="post">
                    <div class="form-input">
                        <div class="input-element">
                            <p id="messageErrorEmailAndPassword" style="color:red;margin-top:0px; margin-bottom: 0.6rem;font-size: 0.8rem"></p>
                            <label for="email">メールアドレス</label>
                            <input class="email" type="text" id="email" name="email" placeholder="メールアドレス">
                            <p id="messageErrorEmail" style="color:red;margin-top:0px; margin-bottom: 0.6rem; font-size: 0.8rem"></p>
                        </div>
                        <div class="input-element">
                            <label for="password">パスワード</label>
                            <input class="password" type="text" id="password" name="password" placeholder="パースワード">
                            <p id="messageErrorPassword" style="color:red;margin-top:0px; margin-bottom: 0.6rem;font-size: 0.8rem"></p>
                        </div>

                        <input id="login-button" name="loginbutton" type="submit" value="ログイン">
                        <span class="text-link"><a href="#">パスワードをお忘れの方</a></span>
                        <span class="text-link"><a href="#">アカウントの新規登録</a></span>
                    </div>
                </form>
        </div>
    </div>
</body>

</html>