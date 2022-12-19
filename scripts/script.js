$('.hexa').each(function () {
    $(this).on('mouseover', function () {

        $(this).find('.hexa-empty').addClass('hexa-empty-hover')
    });
    $(this).on('mouseout', function () {

        $(this).find('.hexa-empty').removeClass('hexa-empty-hover')
    });
});

function OpenMenu() {

    $('.menu-start').hide();

    $('.menu-cancel').show();

    $('menu.responsive-menu.close').addClass('open');

    $('menu.responsive-menu.close').removeClass('close');

    $('.responsive-navbar').addClass('open');

    $('menu.responsive-menu .menu-logo').show('slow');
}
function CloseMenu() {

    $('.menu-start').show();

    $('.menu-cancel').hide();

    $('menu.responsive-menu.open').addClass('close');

    $('menu.responsive-menu.open').removeClass('open');

    $('.responsive-navbar').removeClass('open');

    $('menu.responsive-menu .menu-logo').hide('slow');

}

$('.responsive-menu .btn-start-cancel > iconify-icon').each(function () {

    $(this).on('click', function () {

        $('menu.responsive-menu').hasClass('open') ? CloseMenu() : OpenMenu();

    });

});