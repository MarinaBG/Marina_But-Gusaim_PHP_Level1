<?
    include "config.php";
    
    $login = (!empty($_POST["login"]))?strip_tags($_POST["login"]):"";
    $pass = (!empty($_POST["pass"]))?strip_tags($_POST["pass"]):"";
    $sql = "select * from users where login='$login' and pass=md5('$pass')";
    
    $res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));
    
    $data = mysqli_fetch_assoc($res);
    $user_name = $data['name'];
    
    if(mysqli_num_rows($res)>0){
        setcookie("name",$user_name);
        setcookie("login",$login);
        echo "personalAccount.php";
    }
    else{
        echo '0';
    }
?>