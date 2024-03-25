<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
            gap: 10px;
            background-color: azure;
            font-size: 30px;
            font-family: 'Poppins', 'sans-serif';
            border-radius: 20px
        }

        .profile {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            background-image: url(img/admin.png);
            background-size: cover;
            background-position: center;
            border: 3px solid black;
        }

        button {
            font-size: 18px;
            background-color: skyblue;
            border: 1px solid black;
            border-radius: 6px;
            width: 100px;
            padding: 5px;
            cursor: pointer;
        }

        h2 {
            font-size: 40px;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="profile"></div>
            <h2>Selamat Datang Admin</h2>
            <button><a href="login.php">Logout</a></button>
        </div>
    </div>
</body>
</html>