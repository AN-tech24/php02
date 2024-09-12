<?php
//エラー表示
ini_set("display_errors", 1);
error_reporting(E_ALL);  // **エラー表示設定を追加しました**

//1. POSTデータ取得
$name   = $_POST["name"];
$gender  = $_POST["gender"];
$x_account_url = $_POST["x_account_url"];
$region= $_POST["region"];
$main_character = $_POST["main_character"];
$requests = $_POST["requests"];


try {
  //Password:MAMP='root',XAMPP=''
  // 下のどちらかを記載する
// 　さくらのサーバ　Githubに挙げるときは消す
  //
  // PCでのローカル
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','''','');

  $pdo = new PDO('mysql:dbname=gsdeploy_unit2;charset=utf8;host=mysql57.gsdeploy.sakura.ne.jp','',''');
} catch (PDOException $e) {
  exit('DBError:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql = "INSERT INTO gs_bm_table(name,gender,x_account_url,region,main_character,requests)VALUES(:name,:gender,:x_account_url,:region,:main_character,:requests)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':gender',$gender,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':x_account_url',$x_account_url,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':region',$region,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':main_character',$main_character,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':requests',$requests,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行してエラーが出たということはSQLのエラーを疑う

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit();

}
?>
