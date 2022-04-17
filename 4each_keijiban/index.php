<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="logo">
  <img src="4eachblog_logo.jpg">
</div>

<body>
  <?php
  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "root");
  $stmt = $pdo->query("select*from 4each_keijiban");
  ?>

  <header>
    <div class="top">
    </div>
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
  </header>
  <main>
    <div class="main-contents">
      <div class="left">

        <h1>プログラミングに役立つ掲示板</h1>
        <div class="form1">
          <form method="post" action="insert.php">
            <h3>入力フォーム</h3>
            <div>

              <label>ハンドルネーム</label>
              <br>
              <input type="text" sixe="40" name="handlename">
            </div>
            <div>
              <label>タイトル</label>
              <br>
              <input type="text" sixe="40" name="title">
            </div>
            <div>
              <labele>コメント</label>
                <br>
                <textarea cols="60" rows="7" name="comments"></textarea>
            </div>
            <div>
              <input type="submit" class="submit" value="送信する"></input>
            </div>
          </form>

        </div>

        <?php
        while($row = $stmt->fetch()) {
          echo "<div class='kiji'>";
             echo "<h3>" . $row['title'] . "</h3>";
             echo "<div class='contents'>";
                echo $row['comments'];
                 echo "<div class='handlename'>posted by" . $row['handlename'] . "</div>";
             echo "</div>";
          echo "</div>";
        }
        ?>

      </div>

      <div class="right">
        <h3>人気の記事</h3>
        <p>PHPオススメ本</p>
        <p>PHP MyAdminの使い方</p>
        <p>今人気のエディタ Top5</p>
        <p>HTMLの基礎</p>

        <h3>オススメリンク</h3>
        <p>インターノウス株式会社</p>
        <p>XAMPPのダウンロード</p>
        <p>Eclipseのダウンロード</p>
        <p>Bracketsのダウンロード</p>

        <h3>カテゴリ</h3>
        <p>HTML</p>
        <p>PHP</p>
        <p>MySQL</p>
        <p>JavaScript</p>

      </div>
    </div>

  </main>

  <footer>
    copyright © internous | 4each blog the which provides A to Z about programming.
  </footer>

</body>
</html>