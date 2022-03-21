<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburger</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&display=swap" rel="stylesheet"> -->
  <script src="https//code.jquery.com/jquery-3.6.0.min.js"></script>
  <!--jQueryの読み込みの後に、以下のコードを追加 -->
  <!-- <script>
    $(function() {
      alert("jQueryが正常に動作しています！");
    });
  </script> -->
  <script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
  <div class="l-container">
    <div class="column__main">
      <header>
        <div class="l-header"> 
          <div class="p-header__logo">
            <h1 class="js-resize-text">Hamburger</h1>
            <!-- <a href="D:/RaiseTeck/WordPress_202201/task/reproduction/sample/gitsample/"><img src="images/common_img/pc_logo.svg" alt="Hamburgerロゴ"></a> -->
          </div>
          <div class="p-header__serch">
            <form id="c-form1" action="/" method="get">
              <input id="c-form1__sbox1" id="s" name="s" type="text" placeholder="キーワードを入力">
              <input id="c-form1__sbtn1" type="submit" name="submit" value="検索">
            </form>
          </div>
        </div>
      </header>
      <main>
        <div class="wrapper">
          <div id="p-main__img">
            <img src="images/mainvisual_img/mainvisual-pc.jpg" alt="front-pageダミーサイト">
            複数ページごとのメインコンテンツ
          </div>
         
        </div>
      </main>
    </div>
    <div class="column__nav">
      サイドバーです
      <?php
        include("sidebar.html");
      ?>
    </div>
  </div>
    
  <footer id="footer">
  </footer>
<!-- <script>
//共通パーツ読み込み
$(function () {
  // $.ajaxSetup({cache:false});
$("#header").load("header.html");
$("#side").load("side.html");
$("#footer").load("footer.html");
});
</script>
   -->
</body>
</html>