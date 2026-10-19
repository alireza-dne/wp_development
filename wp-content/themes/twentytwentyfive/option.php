<?php

add_action('admin_menu', function () {
    add_options_page(
        'عنوان سامانه پیامکی',
        'سامانه پیامکی',
        'manage_options',
        'sms_setting_menu',
        'sms_setting_menu_html_view'
    );
});

function sms_setting_menu_html_view()
{
    echo "<h2>تنظیمات سامانه پیامکی</h2>";

    echo "<div class='wrap'><form action='options.php' method='post'>";

    settings_fields('register_sms_settings');
    do_settings_sections('sms_settings_sections');
    submit_button('ذخیره تنظیمات');


    echo "</form></div>";
}









add_action('admin_init', function () {

    add_settings_section('cy_sms_api_section', 'کد api پنل پیامکی', 'cy_sms_section_html', 'sms_settings_sections');

    register_setting('register_sms_settings', 'cy_sms_api_setting');

    add_settings_field('cy_sms_api_setting_field', 'api code', 'cy_sms_input_html', 'sms_settings_sections', 'cy_sms_api_section');
});


function cy_sms_section_html()
{
    echo "<p>کد پنل را اینجا وارد فرمایید.</p>";
}


function cy_sms_input_html()
{
    $value = get_option('cy_sms_api_setting');
?>
    <input type="text" name="cy_sms_api_setting" value="<?= $value ?>">
<?php
}
