<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <?php

            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "mysql");
            $stmt = $pdo -> query("select * from 4each_keijiban");
        
        ?>

        <a href="#"><img src="4eachblog_logo.jpg" alt="logo"></a>
        <header>
            <ul>
                <li><a href="#">トップ</a></li>
                <li><a href="#">プロフィール</a></li>
                <li><a href="#">4eachについて</a></li>
                <li><a href="#">登録フォーム</a></li>
                <li><a href="#">問い合わせ</a></li>
                <li><a href="#">その他</a></li>
            </ul>
        </header>
        
        <div class="main">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php" class="main_form">
                    <h2 class="main_form_h2">入力フォーム</h2>
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="40" name="handlename">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="40" name="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea name="comments" cols="50%" rows="7"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>

                <?php

                while($row = $stmt -> fetch()) {

                    echo "<form method='post' action='insert.php' class='sab_form'>";
                        echo "<div>";
                            echo"<h3>".$row['title']."</h3>";
                            echo $row['comments'];
                            echo "<p class='p_sm'>".$row['handlename']."</p>";
                        echo "</div>";
                    echo "</form>";
                }

                ?>

            </div><!-- .left -->

            <div class="right">
                <div>
                    <h2>人気の記事</h2>
                    <ul>
                        <li><a href="#">PHPオススメ本</a</li>
                        <li><a href="#">PHP　MyAdminの使い方</a></li>
                        <li><a href="#">いま人気のエディタtop5</a></li>
                        <li><a href="#">HTMlの基礎</a></li>
                    </ul>
                </div>
                <div>
                    <h2>オススメリンク</h2>
                    <ul>
                        <li><a href="#">インターノウス株式会社</a></li>
                        <li><a href="#">XAMPPのダウンロード</a></li>
                        <li><a href="#">Eclipseのダウンロード</a></li>
                        <li><a href="#">Braketsのダウンロード</a></li>
                    </ul>
                </div>
                <div>
                    <h2>カテゴリ</h2>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">MySQL</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </div>
            </div><!-- .right -->
        </div><!-- .main -->

        <footer>
            copyright internous | 4each blog is the one which provides A to Z about programming.
        </footer>

    </body>
</html>