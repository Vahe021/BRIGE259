$(function () {


    $('#prod').on('click', function () {

        $('.reservtable').css({
            display: 'none',
        })
        $('.prodtable').css({
            display: 'block',
        })
        $('.messigtable').css({
            display: 'none',
        })
    })

    $('#res').on('click', function () {

        $('.reservtable').css({
            display: 'block',
        })
        $('.prodtable').css({
            display: 'none',
        })
        $('.messigtable').css({
            display: 'none',
        })
    })

    $('#mess').on('click', function () {

        $('.messigtable').css({
            display: 'block',
        })
        $('.prodtable').css({
            display: 'none',
        })
        $('.reservtable').css({
            display: 'none',
        })
    })

    $('.pset').on('click', function () {
        var div = $(this).parent().parent().parent().find('.divcheng');
        var form1 = $(this).parent().parent().parent().find('.choose');
        form1.css({
            display: 'flex',
        });
        div.css({
            display: 'flex',
        });
    })

    $('.chengchoose').on('click', function () {
        var form1 = $(this).parent().parent().parent().find('.choose');
        var form2 = $(this).parent().parent().parent().find('.cheng');
        var form3 = $(this).parent().parent().parent().find('.delet');
        form3.fadeOut(0);
        form1.fadeOut(0);
        form2.fadeIn(300);
    })

    $('.delchoose').on('click', function () {
        var form1 = $(this).parent().parent().parent().find('.choose');
        var form2 = $(this).parent().parent().parent().find('.cheng');
        var form3 = $(this).parent().parent().parent().find('.delet');
        form3.fadeIn(300);
        form1.fadeOut(0);
        form2.fadeOut(0);
    })
    $('.close > i').on('click', function () {
        $('.divcheng').css({
            display: 'none',
        }, 300);
        var form1 = $(this).parent().parent().parent().parent().find('.choose');
        var form2 = $(this).parent().parent().parent().parent().find('.cheng');
        var form3 = $(this).parent().parent().parent().parent().find('.delet');
        form3.fadeOut(0);
        form1.fadeOut(0);
        form2.fadeOut(0);
    })
})

