<?php
//ポストを受け取る
$name=$_POST['name'];
$mail=$_POST['mail'];
$wine_color=$_POST['wine_color'];
$place=implode(' ', $_POST['place']);
//日付を作成
$str = date('Y/m/d/H:i:s');
//受け取った内容と日付をまとめる
$str=$name.','.$mail.','.$wine_color.','.$place.','.$str;
// 書き込み
$file = fopen('data/data.csv', 'a');    //ファイル読み込み
flock($file, LOCK_EX);            //ファイルロック
fwrite($file, $str."\n");//"\n"は改行コード
flock($file, LOCK_UN);            //ファイルロック解除
fclose($file);

// 読み込み
$tbl = '';
$fp = fopen('data/data.csv', 'r');
while ($data = fgetcsv($fp, 10000)) {
    $tbl .= '<tr>';
    foreach ($data as $d) {
        $tbl .=  '<td>'.$d.'</td>';
    }
    $tbl .= "</tr>\n";
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style_output.css">
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="title">ワイン白書2017年版</div>
        </div>
        <div class="color_graph">
            <div class="title_color">好きなワインの割合(%)</div>
            <div id="color">
                <div id="red"></div>
                <div id="rose"></div>
                <div id="white"></div>
            </div>
        </div>
        <div class="place_graph">
            <div class="title_color">ワイン生産地の認知度(%)</div>
            <div id="place">
                <div class="bar">
                    <div class="country_name">フランス</div>
                    <div class="white_bar">
                        <div id="fra" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">イタリア</div>
                    <div class="white_bar">
                        <div id="ita" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">スペイン</div>
                    <div class="white_bar">
                        <div id="esp" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">ドイツ</div>
                    <div class="white_bar">
                        <div id="deu" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">チリ</div>
                    <div class="white_bar">
                        <div id="chl" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">アルゼンチン</div>
                    <div class="white_bar">
                        <div id="arg" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">オーストラリア</div>
                    <div class="white_bar">
                        <div id="aus" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">ニュージーランド</div>
                    <div class="white_bar">
                        <div id="nzl" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">南アフリカ共和国</div>
                    <div class="white_bar">
                        <div id="zaf" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">アメリカ合衆国</div>
                    <div class="white_bar">
                        <div id="usa" class="country_bar"></div>
                    </div>
                </div>
                <div class="bar">
                    <div class="country_name">日本</div>
                    <div class="white_bar">
                        <div id="jpn" class="country_bar"></div>
                    </div>
                </div>

            </div>
        </div>
        <div id="footer">
            <div class="more">▼ MORE ▼</div>
        </div>
        <table id="raw" border="1" cellspacing="0" bordercolor="#000000">
            <?=$tbl?>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>