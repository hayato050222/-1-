<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_files/saferelate.css">
    <link rel="stylesheet" href="CSS_files/BackButton.css">
    <title>Document</title>
</head>
<body>

    <header><p id="logo"><img src="images/groupA_logo.png" alt="logo" width = "200" ></p></header>
    <main>
        <div class="scroll-top">
            <a href ="foradmin.php">&lt;戻る</a>
        </div> 
        <div class="app-title">
            <h1>安否関連</h1>
        </div>

        <div class="form">
            <div class="targetarea">
                <select name="place" id="place">
                    <option value="0">全体</option>
                    <option value="1">北海道</option>
                    <option value="2">東北</option>
                    <option value="3">関東</option>
                    <option value="">中部</option>
                    <option value="">近畿</option>
                    <option value="">中国</option>
                    <option value="">四国</option>
                    <option value="">九州</option>
                </select>
            </div>
            <a href="foradmin.php" class="initialization">安否の初期化</a><br>
        </div>
    </main>

</body>
</html>