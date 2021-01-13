$(function () {
    var html = document.getElementsByTagName('html')[0].innerHTML;

    $(window).on('load resize', function () {
//        var h = $(window).height();
        var w = $('.bar').width();
        $('.white_bar').css('width', w - 165);
//        $('.cssload-thecube').css('top', (h - 57 - 65) / 2);
//        $('.cssload-thecube').css('left', (w - 131) / 2);
    });


    //各データの出現回数を変数に格納する
    var count_red = html.match(/赤/g).length-1;
    var count_rose = html.match(/ロゼ/g).length-1;
    var count_white = html.match(/白/g).length-2;
    var count_fra = html.match(/フランス/g).length - 2;
    var count_ita = html.match(/イタリア/g).length - 2;
    var count_esp = html.match(/スペイン/g).length - 2;
    var count_deu = html.match(/ドイツ/g).length - 2;
    var count_chl = html.match(/チリ/g).length - 2;
    var count_arg = html.match(/アルゼンチン/g).length - 2;
    var count_aus = html.match(/オーストラリア/g).length - 2;
    var count_nzl = html.match(/ニュージーランド/g).length - 2;
    var count_zaf = html.match(/南アフリカ/g).length - 2;
    var count_usa = html.match(/アメリカ/g).length - 2;
    var count_jpn = html.match(/日本/g).length - 2;
    //各項目のトータルを計算
    var total_color = count_red + count_rose + count_white;
    var total_place = count_red + count_rose + count_white;
    //    var total_place = count_fra + count_ita + count_esp + count_deu + count_chl + count_arg + count_aus + count_nzl + count_zaf + count_usa + count_jpn;

    //各データの出現割合を算出
    var red_ratio = count_red / total_color;
    var rose_ratio = count_rose / total_color;
    var white_ratio = count_white / total_color;
    var fra_ratio = count_fra / total_place;
    var ita_ratio = count_ita / total_place;
    var esp_ratio = count_esp / total_place;
    var deu_ratio = count_deu / total_place;
    var chl_ratio = count_chl / total_place;
    var arg_ratio = count_arg / total_place;
    var aus_ratio = count_aus / total_place;
    var nzl_ratio = count_nzl / total_place;
    var zaf_ratio = count_zaf / total_place;
    var usa_ratio = count_usa / total_place;
    var jpn_ratio = count_jpn / total_place;


    //色の好みをグラフとして表示
    var red_width = 100 * red_ratio + "%";
    $('#red').css('width', red_width);
    var rose_width = 100 * rose_ratio + "%";
    $('#rose').css('width', rose_width);
    var white_width = 100 * white_ratio + "%";
    $('#white').css('width', white_width);
    //生産国の認知度を棒グラフで表示
    var fra_width = 100 * fra_ratio + "%";
    $('#fra').css('width', fra_width);
    var ita_width = 100 * ita_ratio + "%";
    $('#ita').css('width', ita_width);
    var esp_width = 100 * esp_ratio + "%";
    $('#esp').css('width', esp_width);
    var deu_width = 100 * deu_ratio + "%";
    $('#deu').css('width', deu_width);
    var chl_width = 100 * chl_ratio + "%";
    $('#chl').css('width', chl_width);
    var arg_width = 100 * arg_ratio + "%";
    $('#arg').css('width', arg_width);
    var aus_width = 100 * aus_ratio + "%";
    $('#aus').css('width', aus_width);
    var nzl_width = 100 * nzl_ratio + "%";
    $('#nzl').css('width', nzl_width);
    var zaf_width = 100 * zaf_ratio + "%";
    $('#zaf').css('width', zaf_width);
    var usa_width = 100 * usa_ratio + "%";
    $('#usa').css('width', usa_width);
    var jpn_width = 100 * jpn_ratio + "%";
    $('#jpn').css('width', jpn_width);

    $('#footer').on('click', function () {
        $('#raw').toggle();
    });
});
