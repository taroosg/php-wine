<html>

<head>
    <meta charset="utf-8">
    <title>Wine_Research</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style_input.css">
</head>

<body>
    <div class="main">
        <div class="header">ワインに関するアンケート調査</div>
        <form action="output_data.php" method="post">
            <dl>
                <dt><label for="name">■お名前</label></dt>
                <dd><input type="text" name="name" id="name" size="20" class="access" required></dd>
                <dt><label for="mail">■Email</label></dt>
                <dd><input type="text" name="mail" id="mail" size="20" class="access" required></dd>
                <dt>■お好みのワインを選択してください．</dt>
                <dd class="color">
                    <div class="color_select">
                        <label><input type="radio" name="wine_color" value="赤" required><div class="color_label">赤</div></label>
                    </div>
                    <div class="color_select">
                        <label><input type="radio" name="wine_color" value="ロゼ"><div class="color_label">ロゼ</div></label>
                    </div>
                    <div class="color_select">
                        <label><input type="radio" name="wine_color" value="白"><div class="color_label">白</div></label>
                    </div>
                </dd>
                <dt>■飲んだことのあるワインを選択してください．</dt>
                <dd class="coutry">
                    <label><input type="checkbox" name="place[]" value="フランス">フランス</label>
                    <label><input type="checkbox" name="place[]" value="イタリア">イタリア</label>
                    <label><input type="checkbox" name="place[]" value="スペイン">スペイン</label>
                    <label><input type="checkbox" name="place[]" value="ドイツ">ドイツ</label>
                    <label><input type="checkbox" name="place[]" value="チリ">チリ</label>
                    <label><input type="checkbox" name="place[]" value="アルゼンチン">アルゼンチン</label>
                    <label><input type="checkbox" name="place[]" value="オーストラリア">オーストラリア</label>
                    <label><input type="checkbox" name="place[]" value="ニュージーランド">ニュージーランド</label>
                    <label><input type="checkbox" name="place[]" value="南アフリカ">南アフリカ共和国</label>
                    <label><input type="checkbox" name="place[]" value="アメリカ">アメリカ</label>
                    <label><input type="checkbox" name="place[]" value="日本">日本</label>
                </dd>
            </dl>
            <input type="submit" value="送信" class="submit">
        </form>
        <div id="footer">
            <div class="more">2017年度版ワイン白書</div>
        </div>
    </div>
</body>

</html>
