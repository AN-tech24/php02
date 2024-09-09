<?php

//エラー表示
ini_set("display_errors", 1);

$name_of_shop = $_POST["name_of_shop"];
$name_of_staff = $_POST["name_of_staff"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$date = $_POST["date"];
$time = $_POST["time"];
$required_time = $_POST["required_time"];
$clame_content = $_POST["clame_content"];
$response_content = $_POST["response_content"];

//DB接続
try {
  //Password:MAMP='root',XAMPP=''
  // 下のどちらかを記載する
// 　さくらのサーバ　Githubに挙げるときは消す
  // $pdo = new PDO('mysql:dbname=gsdeploy_unit1;charset=utf8;host=mysql57.gsdeploy.sakura.ne.jp','gsdeploy','8130mama');
  // PCでのローカル
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','******','******');
} catch (PDOException $e) {
  exit('DBError:'.$e->getMessage());
}
//データ登録SQL作成
$sql = "INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES(:name, :email, :naiyou, sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':x_account_url', $x_account_url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':region', $region, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':main_character', $main_character, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':requests', $requests, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行
$status = $stmt->execute();

//データ登録処理後
if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
  }else{
    //input.phpへリダイレクト
    header("Location: input.php");
    exit();
  
  }

?>