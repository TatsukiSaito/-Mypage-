<?php
mb_internal_encoding("utf8");
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet"type="text/css"href="mypage_hensyu.css">
</head>
<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="logout"><a href="log_out.php">ログアウト</a></div>
    </header>
    <main>
    <div class="box">
        <h2>会員情報</h2>
        <div class="hello">
            <?php echo "こんにちは!".$_SESSION['name']."さん" ?>
        </div>
        <form action="mypage_update.php" method="post">
        <div class="profile_pic">
            <img src="<?php echo $_SESSION['picture']; ?>">
        </div>
        <div class="basic_info">
            <p>氏名:<input type="text" size="30" value="<?php echo $_SESSION['name'];?>" name="name"></p>
             <p>メール:<input type="text" size="30" value="<?php echo $_SESSION['mail'];?>" name="mail"></p>
             <p>パスワード:<input type="text" size="30" value="<?php echo $_SESSION['password'];?>" name="password"></p>
        </div>
        <div class="comments">
            <textarea rows="5" cols="75" name="comments">
             <?php echo $_SESSION['comments']; ?>
            </textarea>
        </div>
         <form action="mypage.php" method="post" class="from_center">
            <input type="hidden" value="<?php echo rand(1,10);?>"name="from_mypage_hensyu">
        <div class="hensyu">
                <input type=submit class="submit_button" size="35" value="この内容に変更する">
        </div>
            </form>
        </form>
         </div>
        
<footer>
© 2018 InterNous.inc. All rights reserved    
</footer>
</main>
</body>
</html>