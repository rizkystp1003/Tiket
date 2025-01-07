<html>

<head>
    <title>E-Tiket | Sign Up</title>
    <link rel="icon" href="image/E-Tiket.png">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            /* Modern blue gradient */
            background-attachment: fixed;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            font-family: 'Roboto', sans-serif;
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
            <p>Sign Up dulu, baru Sign In <b>Tiketnya</b></p>
            <div class="container" style="width: 500px;">
                <form method="post" action="signup_p.php">
                    <div class="input-field">
                        <input type="text" name="username" id="user">
                        <label for="user">Username</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="pass">
                        <label for="pass">Password</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="fullname" id="full">
                        <label for="full">Fullname</label>
                    </div>
                    <button type="submit" class="btn waves-effect blue">Sign Up <i class="ion-android-person-add"></i></button>
                </form>
                <p class="left">Anda sudah punya akun? Silahkan langsung Sign In.</p>
                <a href="signin.php" style="font-family: segoe ui light;"><button class="btn waves-effect">Sign In <i class="ion-log-in"></i></button></a>
            </div>
        </div>
    </div>
</body>

</html>