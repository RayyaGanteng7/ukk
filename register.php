    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Registrasi</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <style>
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

        td{
            text-align: left;
        }
    </style>
    <body>
    <div id="wrapper">
        <div id="header">
        <h1 style="color: #483D8B; font-family: impact;">Halaman Login</h1>
        <?php
            // Check if user is not logged in
            if(!isset($_SESSION['userid'])) {
        ?>
        <!-- Button login jika pengguna belum login -->
        <?php } ?>
        <form action="proses_register.php" method="post" onsubmit="return validateForm()">
            <table>
                <tr>
                    <td style="color: #2F4F4F">Username</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td style="color: #2F4F4F">Password</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td style="color: #2F4F4F">Email</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td style="color: #2F4F4F">Nama Lengkap</td>
                    <td><input type="text" name="namalengkap" id="namalengkap"></td>
                </tr>
                <tr>
                    <td style="color: #2F4F4F">Alamat</td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="register"></td>
                </tr>
            </table>
        </form>
        <div style="text-align: center; margin-bottom: 10px;">
            <p style="color: black;">Sudah punya akun? <a href="login.php"> Login di sini!</a></p>
        </div>
        <div id="footer">
        <h4 style="color: #800000;">&copy; UKK-2024 | RayGTG</h4>
    </div>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var email = document.getElementById("email").value;
            var namalengkap = document.getElementById("namalengkap").value;
            var alamat = document.getElementById("alamat").value;

            if (username === "" || password === "" || email === "" || namalengkap === "" || alamat === "") {
                alert("Semua kolom harus diisi!");
                return false;
            }
            return true;
        }
    </script>

    </body>
    </html>
