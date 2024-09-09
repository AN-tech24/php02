<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>参戦登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <!-- getは見えてもいいものに使う。基本はpostをつかう　どこに飛ぶの？action -->
  <div class="jumbotron">
   <fieldset>
    <legend>参戦登録</legend>
     <label>参加者名：<input type="text" name="name"></label><br>
     <label>性別：</label>
			<select id="gender" name="gender" required>
				<option value disabled selected>選択してください</option>
				<option value="男">男</option>
        <option value="女">女</option>
        <option value="当てはまらない">当てはまらない</option>
        <option value="無回答">無回答</option>
      </select><br>
      <label>XアカウントURL：<input type="text" name="x_account_url"></label><br>
      <label>地域：</label>
			<select id="region" name="region" required>
				<option value disabled selected>選択してください</option>
				<option value="北海道">北海道</option>
        <option value="関東">関東</option>
        <option value="中部">中部</option>
        <option value="関西">関西</option>
        <option value="四国">四国</option>
        <option value="九州">九州</option>
        <option value="沖縄">沖縄</option>
        <option value="その他">その他</option>
      </select>
     <label>主な使用キャラ：</label>
			<select id="main_character" name="main_character" required>
				<option value disabled selected>選択してください</option>
				
				<option value="マリオ">マリオ</option>
        <option value="ドンキーコング">ドンキーコング</option>
				<option value="リンク">リンク</option>
				<option value="サムス">サムス</option>
				<option value="ダークサムス">ダークサムス</option>
        <option value="カービィ">カービィ</option>
				<option value="プリン">プリン</option>
				<option value="デイジー">デイジー</option>
        <option value="ドクターマリオ">ドクターマリオ</option>
				<option value="ホムラ＆ヒカリ">ホムラ＆ヒカリ</option>

			</select>
      <br>
     <label>主催への要望：<textArea name="requests" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
