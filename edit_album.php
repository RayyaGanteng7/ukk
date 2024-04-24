    <?php
        session_start();
        if(!isset($_SESSION['userid'])){
            header("location:login.php");
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Edit Album</title>
        <link rel="stylesheet" href="style.css"/>
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
                color: #5E616B;
                }

                #header {
                background-color: #8FBC8F;
                padding: 20px;
                border-radius: 10px;
                text-align: center;
                box-shadow: 0 0 20px black;
                }

                h1 {
                    text-align: center;
                    margin-top: 20px;
                    color: #6b3b08;
                }

                p {
                    text-align: center;
                    margin-top: 10px;
                    color: #6b3b08;
                }

                ul {
                    list-style-type: none;
                    padding: 0;
                    text-align: center;
                    margin-top: 20px;
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
                    background-color: black;
                    color: red;
                }

                form table {
                    width: 100%;
                    margin-top: 20px;
                }

                form table tr {
                    margin-bottom: 15px;
                }

                form table tr:last-child {
                    margin-bottom: 0;
                }

                form table td {
                    padding: 10px;
                    color: #6b3b08;
                    text-align: left;
                }

                form table input[type="text"],
                form table input[type="file"],
                form table select {
                    width: 100%;
                    padding: 8px;
                    border-radius: 5px;
                    border: 1px solid #ccc;
                }
                input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: grey;
                color: red;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                }

                input[type="submit"]:hover {
                background-color: black;
                }
        </style>
    </head>
    <body>
    <div id="wrapper">
        <div id="header">
        <h1 style="color: #483D8B; font-family: impact;">Website Galeri Foto</h1>
        <p style="color: black;">Perbaiki Album Kamu Disini!</p>
        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="foto.php">Upload</a></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>

        <form action="update_album.php" method="post">
            <?php
                include "koneksi.php";
                $albumid=$_GET['albumid'];
                $sql=mysqli_query($conn,"select * from album where albumid='$albumid'");
                while($data=mysqli_fetch_array($sql)){
            ?>
            <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
            <table>
                <tr>
                    <td style="color: #336633">Nama Album</td>
                    <td><input type="text" name="namaalbum" value="<?=$data['namaalbum']?>"></td>
                </tr>
                <tr>
                    <td style="color: #336633">Deskripsi</td>
                    <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Perbarui"></td>
                </tr>
            </table>
            <?php
                }
            ?>
        </form>
        <div id="footer">
        <h4 style="color: #800000">&copy; UKK-2024 | RayGTG</h4>
        </div>
    </div>
    </body>
    </html>