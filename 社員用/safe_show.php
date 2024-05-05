

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_files/safeinfo.css">
    <link rel="stylesheet" href="CSS_files/BackButton.css">
    <title>安否状況</title>
</head>
<body>
    <header>
        <p id="logo"><img src="images/groupA_logo.png" alt="logo" width="128"></p>
    </header>
    <main>
        <div class="scroll-top">
            <a href="./overview.php">&lt;戻る</a>
        </div> 
        <div class="app-title">
            <h1>安否状況</h1>
        </div>

        <div class="safeinfro-screen">

            <div class="safeinfro-control">
                
                <div class="safeinfrocontrol-group">
                    <select name="place" id="place">
                        <option value="1">部署</option>
                    </select>
                </div>

                <div class="safeinfrocontrol-group">
                    <input type="text" name="Employee_Number" placeholder="社員番号" id="Employee_Number">
                </div>

                <div class="safeinfrocontrol-group">
                    <select name="safe" id="safe">
                        <option value="1">安否</option>
                    </select>
                </div>
                <button type="button" id="search">検索</button><br>
    
            </div>

            <div class="comment-group" id="comment-group">
                <!-- ここに動的に生成されるボタンが表示される -->
            </div>
        </div>
    </main>
    <script src="./js/safeinfro.js"></script>
</body>
</html>
