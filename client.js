// *************************************
// jQuery UI の DatePicker 用
// *************************************
var datepicker_option = {
    dateFormat: 'yy/mm/dd',
    dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
    monthNames: ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"],
    changeMonth: true,
    showMonthAfterYear: true,
    yearSuffix: '年',
    changeYear: true,
    showAnim: 'fadeIn',
    yearRange: "c-70:c"
}

$(function(){

    // ***************************
    // DatePicker
    // ***************************
    $("#key").datepicker( datepicker_option );

    // ***************************
    // 日付変更でデータがあれば表示
    // ***************************
    $("#key").on("change", function(){

        if (  ($("#key").val()).trim() != "" ) {
            if ( typeof(localStorage[$("#key").val()]) != 'undefined' ) {
                $("#text").val(localStorage[$("#key").val()]);
            }
            // データが無い場合は本文クリア
            else {
                $("#text").val("");
            }
        }

    });

    // ***************************
    // 保存ボタンで更新
    // ***************************
    $("#save").on("click", function(){

        if ( $("#text").val() == "" ) {
            return;
        }

        localStorage[$("#key").val()] = $("#text").val();

    });


});