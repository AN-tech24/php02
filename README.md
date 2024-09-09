①課題番号-プロダクト名
🔥篝火🔥参戦フォーム

②課題内容（どんな作品か）
大乱闘スマッシュブラザーズの試合に参加することができます！

③DEMO
[https://blueweasel38.sakura.ne.jp/bookmark/index.php

④作ったアプリケーション用のIDまたはPasswordがある場合
なし

⑤工夫した点・こだわった点
-ユーザが入力するデータが少なくなるように選択式にするなど、これまでの講義で利用したことを活かせた。
新しいことをに学ぶと、新しいことだけで何かを作ろうとしてしまいがちだが、これまでに蓄積したものを活用しながらアプリを作成したい。
-ユーザー目線、運営者目線を考え、要望欄等を追加した。

⑥難しかった点・次回トライしたいこと(又は機能)
-当初、DB上にINSERTでデータを登録しようとしたところ、文字化けが発生してしまった。
非常に焦ったが、データベース、テーブル、カラムそれぞれにおいて文字エンコーディングの確認と変更を実施し、立て直すことができた。


⑦質問・疑問・感想、シェアしたいこと等なんでも
〇tips:
>文字エンコーディングの確認と変更方法　例：テーブル
-- テーブルの文字エンコーディングを確認
SHOW CREATE TABLE gs_bm_table;
-- UTF-8に変更
ALTER TABLE gs_bm_table CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
