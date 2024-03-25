<?php
if(isset($_POST["submit"])) {
    if($_POST["username"] == "milda" && $_POST["password"] == "milda2595") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            color: black;
        }

        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            color: white;
            background-color: lightskyblue;
        }

        .content{
            width: 60%;
            height: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: azure;
            font-size: 30px;
            font-family: 'Poppins', 'sans-serif';
            border-radius: 20px
        }

        .profile {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            background-image: url(img/login.png);
            background-size: cover;
            background-position: center;
            border: 3px solid black;
        }

        input {
            margin-top: 15px;
            border: 1px solid black;
            width: 220px;
            height: 25px;
        }

        button {
            margin-top: 25px;
            cursor: pointer;
            font-size: 15px;
            background-color: skyblue;
            border-radius: 6px;
            padding: 5px;
            border: 1px solid black;
        }

        form{ 
            font-size: 18px;
        }

        p {
            color: red;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="profile"> </div>
                <h2><i>Login Admin</i></h2>
                <?php if(isset($error)) : ?>
                    <p>Username ? Password anda salah <?= $_POST["username"];?></p>
                <?php endif; ?>
        
                 <form action="" method="post">
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                    <br>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                    <br>
                    <button type="submit" name="submit">Login</button>
                </form>
        </div>
    </div>
</body>
</html>