<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="このページの説明文">
  <title>お申込み完了</title>
  <link rel="stylesheet" href="/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <style>
    body{
      text-align: center;
    }
  </style>
</head>
<body>

<?php
  try {
    //DB名、ユーザー名、パスワード[XAMMP使用]
    $dsn = 'mysql:dbname=petcube;host=127.0.0.1';
    $user = 'root';
    $password = 'pass';

    $PDO = new PDO($dsn, $user, $password); //MySQLのデータベースに接続
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示

    //姓
    $firstname = $_POST['firstname'];
    //名
    $lastname = $_POST['lastname'];
    //ユーザー名
    $username = $_POST['username'];
    //Email
    $email = $_POST['email'];
    //郵便番号
    $PostalCode = $_POST['zip01'];
    //都道府県
    $Prefectures = $_POST['pref01'];
    //住所
    $address_name = $_POST['addr01'];

    $sql = "INSERT INTO order_data(firstname,lastname,username,email,PostalCode,Prefectures,address_name) VALUES (:firstname,:lastname,:username,:email,:PostalCode,:Prefectures,:address_name)"; // INSERT文を変数に格納。:nameや:categoryはプレースホルダという、値を入れるための単なる空箱
    try{
      $stmt = $PDO->prepare($sql); //挿入する値は空のまま、SQL実行の準備をする
      $stmt->execute([':firstname'=>$firstname,':lastname'=>$lastname,':username'=>$username,':email'=>$email,':PostalCode'=>$PostalCode,':Prefectures'=>$Prefectures,':address_name'=>$address_name]); //挿入する値が入った変数をexecuteにセットしてSQLを実行
      echo '<h1><b>ご注文ありがとうございました</b></h1><br><a href="index.html">戻る</a>';
    }catch(\Exception $e){
      echo '
      <b>すでに登録されているメールアドレスです。</b>
      <a href="index.html">戻る</a>
      ';
    }

  } catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
  }

?>
</body>
</html>