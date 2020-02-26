<?php
session_start();
$error = "";

if(isset($_COOKIE['remember'])){
    $_SESSION['username'] = $_COOKIE['username'];
    header("Location: index.php");
    exit();
}

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? $_POST['remember'] : null;
    if(empty($name)){
        $error = "Username là bắt buộc";
    } else if(empty($password)){
        $error = "Password là bắt buộc";
    } else if($name != "buithuphuong" || $password != "05071999") {
        $error = "Sai Username hoặc Password";
    } else {
        setcookie('remember', $remember, time() + 999999);
        setcookie('username', $name, time() + 999999);
        setcookie('password', md5($password), time() + 999999);
        $remember = $_COOKIE['remember'];
        $_SESSION['username'] = $name;
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>My Crush</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Indie+Flower|Lovers+Quarrel|Nanum+Pen+Script|Rouge+Script|Yanone+Kaffeesatz|Satisfy&display=swap" rel="stylesheet"/>
	<link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet"/>
	<link rel="stylesheet" href="./css/bootstrap.min.css"/>
	<link rel="stylesheet" href="./css/style.css" />
    <style>
        div.form-login{
            width: 50%;
            color: black!important;
            position: fixed;
            padding: 3rem;
            background-image: url("./images/bg3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 10px;
            top: 20%;
            left: 25%;
            -webkit-box-shadow: 45px 45px 78px -12px rgba(247,244,247,0.9);
            -moz-box-shadow: 45px 45px 78px -12px rgba(247,244,247,0.9);
            box-shadow: 45px 45px 78px -12px rgba(247,244,247,0.9);
        }

        @media (max-width: 767px){
            div.form-login{
                width: 100%;
                padding: 2rem;
                border-radius: 6px;
                top: 20%;
                left: 0;
                -webkit-box-shadow: 45px 45px 78px -12px rgba(247,244,247,0.9);
                -moz-box-shadow: 45px 45px 78px -12px rgba(247,244,247,0.9);
                box-shadow: 45px 45px 78px -12px rgba(247,244,247,0.9);
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-login">
        <h4>Chịu khó đăng nhập để đọc nội dung nha :3</h4>
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($_POST['username'])? $_POST['username'] : '';?>" placeholder="Họ và tên của cậu viết liền không dấu nhé! (Vd: nguyenvananh)">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Ngày tháng năm sinh của cậu! (Vd: 01012000)">
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember" value="1"/> Nhớ mật khẩu
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
        <h3 style="color: orangered;">
            <?php echo $error;?>
        </h3>
    </div>
</div>
</body>