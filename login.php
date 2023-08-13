<?php
session_start();
?>
<html>
<head>
    <title>visitor</title>
    <meta charset="utf-8" />
    <meta name="description" content="visitor" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <script type="text/javascript" src="result_account.js"></script>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="header">
                <p>
                    login
                </p>
            </div>
            <div class="login">
                <form action="prosesing.php" method="post">
                    <div class="username">
                        <input type="text" name="username" placeholder="username" required="" maxlength="25" />
                    </div>
                    <div class="password">
                        <input type="password" name="password" placeholder="password" required="" maxlength="25" />
                    </div>
                    <div class="submit">
                        <input type="submit" name="submit" value="Masuk" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>