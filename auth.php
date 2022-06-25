<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Container */
        .container{
            width:40%;
            margin:0 auto;
        }

        /* Login */
        #div_login{
            border: 1px solid gray;
            border-radius: 3px;
            width: 470px;
            height: 270px;
            box-shadow: 0px 2px 2px 0px  gray;
            margin: 0 auto;
        }

        #div_login h1{
            margin-top: 0px;
            font-weight: normal;
            padding: 10px;
            background-color: cornflowerblue;
            color: white;
            font-family: sans-serif;
        }

        #div_login div{
            clear: both;
            margin-top: 10px;
            padding: 5px;
        }

        #div_login .textbox{
            width: 96%;
            padding: 7px;
        }

        #div_login input[type=submit]{
            padding: 7px;
            width: 100px;
            background-color: lightseagreen;
            border: 0px;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="name" name="name" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="password" name="password" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>


</body>
</html>

<?php
include "dbcon.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['name']);
    $password = mysqli_real_escape_string($con,$_POST['password ']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where name='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['name'] = $uname;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>