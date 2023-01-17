
<?

include '../config.php';
session_start();
// error_reporting(0);


if(isset($_POST['loginbtn']))
{
  $name = mysqli_real_escape_string($db,$_POST['name']);
  $pass = mysqli_real_escape_string($db,$_POST['pass']);

$upasssha1 = sha1($pass);
$upassmd = md5($upasssha1);
  
 $chklogin = mysqli_query($db,"SELECT admin, pass FROM `ghstng` WHERE  admin='$name' AND pass='$upassmd'");
if(mysqli_num_rows($chklogin) == 1)
  { 
   $_SESSION['adminses'] = $name;
    header('location:rudash.php');
  }else{
    echo '<div id="errors" class="alert notifycross" style="background:rgba(255,196,196,0.636); color:red; border-radius:5px; border-left:15px solid red;font-size:1.5em;box-shadow:1px 1px 10px red;" role="alert">
   Неверные данные учетной записи для входа
   </div>';
  }

}







?>














<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="js/style.css">
</head>
<body>
 <a href="index.php" style="border-radius:50%;border:1px solid aqua; background:navy;"> <img src="png/en.png" style="width:2em;height:2em;border-radius:50%;box-shadow:1px 1px 18px silver; border:2px solid aqua"></a>
 
    <div class="login-box">
        <h2>Авторизоваться</h2>
        <form method="post" action="">
            <div class="user-box">
                <input name="name" type="text" required="">
                <label>Имя пользователя</label>
            </div>
            <div class="user-box">
                <input name="pass" type="password" required="">
                <label>Пароль</label>
            </div>

            <button id="btn" type="submit" name="loginbtn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Авторизоваться
            </button>
            
        </form>
    </div>
</body>
</html>