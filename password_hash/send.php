<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">名前:</label>
    <input type="text" name="user_name" required="required">
    <br>
    <label for="">メールアドレス:</label>
    <input type="text" name="user_email" required="required">
    <br>
    <label for="">パスワード:</label>
    <input type="text" name="user_password" placeholder="８文字以上" required="required">
    <br>
    <input type="submit" value="送信">
  </form>
</body>
</html>