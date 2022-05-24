$('.chosen_lang').click( function (){
    $(this).closest('.lang_drpdn').find('.dropdwn_choose').toggleClass('dropdown_active')
});

$('.lang_drpdn').mouseleave(function() {
    $(this).find('.dropdwn_choose').removeClass('dropdown_active');
});

$('.menu_catalog').click( function() {
    $(this).closest('.catalog_cl').find('.catalog_dropd').toggleClass('catalog_dropd_active')
});

$('.profile_svg').click( function() {
    $('.dropdwn_for_profile').toggleClass('dropdwn_for_profile_aactive');
});
$('.profile_svg').mouseleave(function() {
    $(this).find('.dropdwn_for_profile').removeClass('dropdwn_for_profile_aactive');
});

$('.like_post').click( function() {
    $(this).toggleClass('like_post_active');
});

$('.subs_btn').click( function(e) {
    e.preventDefault();
    if($('.add_email_adr').val() == ''){
        $('.add_email_adr').css({
            'border-color': '#CE3C5C'
        });
    }
});

$('.login_btn').click( function() {
    $('.login_popup_block').css('display','flex');
    $('body').css('overflow','hidden');
});
$('.eye_line').click( function(){
    $(this).removeClass('eye_active');
    $(this).closest('.pass_area').find('.eye').addClass('eye_active');
    $(this).closest(".pass_area").find(".log_inp").attr('type', 'text');

});
$('.eye').click( function(){
    $(this).removeClass('eye_active');
    $(this).closest('.pass_area').find('.eye_line').addClass('eye_active');
    $(this).closest(".pass_area").find(".log_inp").attr('type', 'password');
});

$('.close_login').click( function(){
    $('.login_popup_block').css('display','none');
    $('.register_section').css('display','none');
    $('.reset_password_section').css('display','none');
    $('body').css('overflow','auto');
});

$('.go_to_reg').click( function() {
    $('.register_section').css('display','flex');
    $('body').css('overflow','hidden');
});

$('.forgot_pass').click( function() {
    $(this).closest('.login_popup_block').css('display','none');
    $('.reset_password_section').css('display','flex');
});

$('.close_scs_btn, .close_success').click( function(){
    $('.successfull_section').css('display','none');
});

$('.close_new_pass').click( function() {
    $('.new_password_section').css('display','none');
});

$('.notif_fav .head_icons_svg').click( function() {
    $('.for_notifications').toggleClass('for_notifications_active');
    $('.for_catal').removeClass('for_catal_active');
});
$('.head_catal .head_icons_svg').click( function() {
    $('.for_catal').toggleClass('for_catal_active');
    $('.for_notifications').removeClass('for_notifications_active');
});

$('.sortby_sp').click( function() {
    $('.sorts_drpdwn').toggleClass('sorts_drpdwn_active');
});

$('.messages_from_user').click( function() {
    $('.messages_from_user').removeClass('messages_from_user_active');
    $(this).addClass('messages_from_user_active');
});

$('.sett_tochk').click( function() {
    $('.setting_del_block').toggleClass('setting_del_block_active');
});


if (window.matchMedia('(max-width: 1024px)').matches) {
    $('.messages_from_user').click( function() {
        $('.message_block_').show(200);
        $('.message_users_block').hide()
    });
}

$('.edit_profile').click( function() {
    $('.prof_menu_sp').removeClass('prof_menu_sp_active');
    $(this).addClass('prof_menu_sp_active');
    $('.for_edit_profile').show(200).addClass('for_edit_profile_active');
    $('.for_my_purchases').hide().removeClass('for_my_purchases_active');
    $('.for_my_comments').hide().removeClass('for_my_comments_active');
    $('.for_my_favorites').hide().removeClass('for_my_favorites_active');
    $('.for_settings').hide().removeClass('for_settings_active');
});

$('.my_purchases').click( function() {
    $('.prof_menu_sp').removeClass('prof_menu_sp_active');
    $(this).addClass('prof_menu_sp_active');
    $('.for_edit_profile').hide().removeClass('for_edit_profile_active');
    $('.for_my_purchases').show(200).addClass('for_my_purchases_active');
    $('.for_my_comments').hide().removeClass('for_my_comments_active');
    $('.for_settings').hide().removeClass('for_settings_active');
    $('.for_my_favorites').hide().removeClass('for_my_favorites_active');
});

$('.my_comments').click( function() {
    $('.prof_menu_sp').removeClass('prof_menu_sp_active');
    $(this).addClass('prof_menu_sp_active');
    $('.for_edit_profile').hide().removeClass('for_edit_profile_active');
    $('.for_my_purchases').hide().removeClass('for_my_purchases_active');
    $('.for_my_comments').show(200).addClass('for_my_comments_active');
    $('.for_my_favorites').hide().removeClass('for_my_favorites_active');
    $('.for_settings').hide().removeClass('for_settings_active');
});

$('.my_favorites').click( function() {
    $('.prof_menu_sp').removeClass('prof_menu_sp_active');
    $(this).addClass('prof_menu_sp_active');
    $('.for_edit_profile').hide().removeClass('for_edit_profile_active');
    $('.for_my_purchases').hide().removeClass('for_my_purchases_active');
    $('.for_my_comments').hide().removeClass('for_my_comments_active');
    $('.for_settings').hide().removeClass('for_settings_active');
    $('.for_my_favorites').show(200).addClass('for_my_favorites_active');
});

$('.settings_').click( function() {
    $('.prof_menu_sp').removeClass('prof_menu_sp_active');
    $(this).addClass('prof_menu_sp_active');
    $('.for_edit_profile').hide().removeClass('for_edit_profile_active');
    $('.for_my_purchases').hide().removeClass('for_my_purchases_active');
    $('.for_my_comments').hide().removeClass('for_my_comments_active');
    $('.for_my_favorites').hide().removeClass('for_my_favorites_active');
    $('.for_settings').show(200).addClass('for_settings_active');
});

$('.remove_comment').click( function() {
    $(this).closest('.comment_block').remove();
});

$('.change_pass').click( function() {
    $(this).closest('.change_notifs').find('.new_pass_confirm').addClass('new_pass_confirm_active');
    $(this).hide();
});
$('.close_edit').click( function() {
    $(this).closest('.change_notifs').find('.new_pass_confirm').removeClass('new_pass_confirm_active');
    $('.change_pass').show();
});

$('.new_pass_confirm .save_edits_btn').click( function(e) {
    e.preventDefault();
    if($('#newpass').val() == '' && $('#confirmpass').val() == ''){
        $('#newpass').css({
            'border-color': '#CE3C5C',
            'background': 'rgba(206, 60, 92, 0.1)'
        });

        $('#confirmpass').css({
            'border-color': '#CE3C5C',
            'background': 'rgba(206, 60, 92, 0.1)'
        });

    } else if ($('#newpass').val() == ''){
        $('#newpass').css({
            'border-color': '#CE3C5C',
            'background': 'rgba(206, 60, 92, 0.1)'
        });

    } else if ($('#confirmpass').val() == ''){
        $('#confirmpass').css({
            'border-color': '#CE3C5C',
            'background': 'rgba(206, 60, 92, 0.1)'
        });

    }
    
});
$('.new_pass_confirm .save_mails').click( function(e) {
    e.preventDefault();
    if($('#email_').val() == '' && $('#mailpass').val() == ''){
        $('#email_').css({
            'border-color': '#CE3C5C',
            'background': 'rgba(206, 60, 92, 0.1)'
        });
    
        $('#mailpass').css({
            'border-color': '#CE3C5C',
            'background': 'rgba(206, 60, 92, 0.1)'
        });
    
    } else if ($('#email_').val() == ''){
        $('#email_').css({
            'border-color': '#CE3C5C',
            'background': 'rgba(206, 60, 92, 0.1)'
        });
    
    } else if ($('#mailpass').val() == ''){
        $('#mailpass').css({
            'border-color': '#CE3C5C',
            'background': 'rgba(206, 60, 92, 0.1)'
        });
    
    }
    
});

$('.remove_shop_cart').click( function() {
    $(this).closest('.shop_cart_prod').remove();
});

$('.edit_addr, .add_addr').click( function() {
    $('.approved_addrs').addClass('approved_addrs_deactive');
    $('.add_edit_address').addClass('add_edit_address_active');
    $('.add_addr').hide();
});

$('.payment_save_btn').click( function() {
    $('.approved_addrs').removeClass('approved_addrs_deactive');
    $('.add_edit_address').removeClass('add_edit_address_active');
    $('.add_addr').show();
});

$('.payment_option_block').on('click', function() {
    $('.chosen_svg').css('display','none');
    $('.chosen_area').removeClass('chosen_area_active');
    $(this).addClass('payment_metod_item_active');
    $(this).find($('.chosen_area')).toggleClass('chosen_area_active');
    $(this).find('.chosen_svg').css('display','block');
})