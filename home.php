<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Jacquard+24&family=Jersey+25&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 720px;
            background: linear-gradient(to top left, #66ccff 0%, #999966 100%);
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #4B0082;
            font-family: "Jersey 25", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 60px;
        }

        p {
            text-align: center;
            margin-top: 10px;
            color: #283747;
            font-family: "Lugrasimo", cursive;
            font-weight: 400;
            font-style: normal;
        }

        ul {
            list-style-type: none;
            padding: 15px;
            text-align: center;
            margin-top: 15px;
        }

        ul li {
            display: inline;
            margin-right: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #F5FFFA;
            padding: 8px 16px;
            border-radius: 15px;
            transition: background-color 0.3s ease;
            background-color: grey;
            font-family: "Anton", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        ul li a:hover {
            background-color: Black;
            color: red;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="icon" type="imagejpg/" href="">
</head>
<body>
    <h1>Website Galeri Foto</h1>
    <p>HELLO! <b><?=$_SESSION['namalengkap']?></b></p>
    
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
