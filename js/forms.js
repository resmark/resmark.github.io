$(document).ready(function() {
    /* Show Password*/
    $('#txthdnPassword').hide();
    $('#txthdnPassword').attr('readonly','readonly');
    $('#txtPassword').blur(function() {
        $('#txthdnPassword').val($(this).val());
    });

    $('#chkShow').change(function() {
        var isChecked = $(this).prop('checked');
        if (isChecked) {
            $('#txtPassword').hide();
            $('#txthdnPassword').show();
        }
        else {
            $('#txtPassword').show();
            $('#txthdnPassword').hide();
        }
    });


    /* Fixed Help Scroll */
    var elementPosition = $('#help').offset();

    $(window).scroll(function(){
        if($(window).scrollTop() > elementPosition.top){
            $('#help').css('position','fixed').css('right','0');
        } else {
            $('#help').css('position','inherit');
        }
    });

    /* Acccordion */
    $('#acc > li > a').click(function(){
        if ($(this).attr('class') != 'active'){
            $('#acc li ul').slideUp();
            $(this).next().slideToggle();
            $('#acc li a').removeClass('active');
            $(this).addClass('active');
        }
    });



    /* Slide Down */
    $(".faq-answer").css("display", "none");
    $("a.faq-question").click(function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var index = $("a.faq-question").index(this)+1;
        $(this).next().html('').slideUp().load(href + ' .answer', function () {
            $(".faq-answer").slideUp()
            $(this).next().slideDown();
        });
    });
});


/* Help Hover on Input */

$('.help').on("focus", 'input', function(event){
    var self = this;
    var fadeTime = 100;

    var helpBox = $('#help');

    helpBox.fadeOut(fadeTime, function(){
        var helpId = $(self).attr('id-help');
        if(helpId){
            $.jsonp({
                url:$helpUrl+'/'+helpId+'.js',
                callback: 'helpMessage',
                cache:true,
                pageCache: true,
                success:function (data, textStatus, xhr) {
                    $('#helpContent').html(data.help);
                    helpBox.fadeIn(500);
                },
                error: function(xOptions, textStatus){
                }

            });
        }
    });

});


/*End All */