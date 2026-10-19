<?php


add_action('admin_init', function () {

    add_settings_section('cy_sms_api_section', 'کد api پنل پیامکی', 'cy_sms_section_html', 'writing');

    register_setting('writing', 'cy_sms_api_setting');
    
    add_settings_field('cy_sms_api_setting_field', 'api code', 'cy_sms_input_html', 'writing', 'cy_sms_api_section');
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