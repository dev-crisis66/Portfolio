$('.hexa').each(function () {
    $(this).on('mouseover', function () {

        $(this).find('.hexa-empty').addClass('hexa-empty-hover');
    });
    $(this).on('mouseout', function () {

        $(this).find('.hexa-empty').removeClass('hexa-empty-hover');
    });
});

function OpenMenu() {

    $('.menu-start').hide();

    $('.menu-cancel').show();

    $('menu.responsive-menu.close').addClass('open');

    $('menu.responsive-menu.close').removeClass('close');

    $('.responsive-navbar').addClass('open');

    $('menu.responsive-menu .menu-logo').show(250);
}
function CloseMenu() {

    $('.menu-start').show();

    $('.menu-cancel').hide();

    $('menu.responsive-menu.open').addClass('close');

    $('menu.responsive-menu.open').removeClass('open');

    $('.responsive-navbar').removeClass('open');

    $('menu.responsive-menu .menu-logo').hide(150);

}

$('.responsive-menu .btn-start-cancel > iconify-icon').each(function () {

    $(this).on('click', function () {

        $('menu.responsive-menu').hasClass('open') ? CloseMenu() : OpenMenu();

    });

});

if(localStorage.getItem('alert-info-state') == "open"){

}else if(localStorage.getItem('alert-info-state') == "close"){
    $('#alert-info').remove();
}

$('#close-alert').on('click', function () {

    $(this).parent().css('transform', 'translateY(-100%)');
    localStorage.setItem('alert-info-state', 'close');

});

// Remove watermark 000webhost
$(document).ready(function(){
    $('div a[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').parent().remove();
})