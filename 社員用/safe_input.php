<?php



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_files/safecheck.css">
    <title>Document</title>
</head>
<body>
    <header><p id="logo"><img src="images/groupA_logo.png" alt="logo" width = "128" ></p></header>
    <main>
        <div class="safecheck">
            <div class="scroll-top">
                <a href = "">&lt;戻る</p>
            </div>        
            <div class="app-title">
                <h1>安否報告</h1>
            </div>
            <form action = "update_safe.php" method = "POST">
                    
                <div class="safecheck-screen">

                    <div class="control">
                        <div class="control-group">
                            <h2><img src="./images/smile.png" alt="smile" width="80px" height="75px"></h2>
                            <input type="radio" name="know" id="safe" value="0" >
                            <label for="safe">無事です</label>
                        </div>

                        <div class="control-group">
                            <h2><img src="./images/sad.png"alt="smile" width="80px" height="75px"></h2>
                            <input type="radio" name="know" id="nosafe" value="1" >
                            <label for="nosafe">被害あり</label>
                        </div>
                    </div>

                    <div class="box">
                        <textarea name="impressions" id="impressions"
                        placeholder="詳しい安否状況を報告してください。(50文字以内)" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="btn">
                    <button type ="submit" id="submit">送信</button><br>
                </div>
            </form>
        
        </div>
    </main>
</body>
</html>