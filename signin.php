<html>

<head>
    <title>E-Tiket | Sign In</title>
    <link rel="icon" href="image/E-Tiket.png">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            background-attachment: fixed;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        .container-box {
            background-color: rgba(0, 0, 0, 0.75);
            color: white;
            width: 100%;
            height: 700px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            text-align: center;
        }

        .form-container img {
            width: 150px;
            height: 150px;
        }

        .form-container p {
            font-size: 21px;
            margin-top: 15px;
        }

        .form-container .input-field label {
            color: #bbb;
        }

        .form-container .btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container-box">
        <div class="form-container">
            <a href="index.php" onclick="window.close();">
                <img src="image/E-Tiket.png" alt="E-Tiket Logo">
            </a>
            <p>Sign In dulu, baru cari <b>Tiketnya</b></p>
            <div class="container" style="width: 500px;">
                <form method="post" action="signin_p.php">
                    <div class="input-field">
                        <input type="text" name="username" id="user">
                        <label for="user">Username</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="pass">
                        <label for="pass">Password</label>
                    </div>
                    <button type="submit" class="btn waves-effect">Sign In <i class="ion-log-in"></i></button>
                </form>
                <p class="left">Anda belum punya akun? Silahkan buat akun anda.</p>
                <a href="signup.php" class="right">
                    <button class="btn waves-effect blue">Sign Up <i class="ion-android-person-add"></i></button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>