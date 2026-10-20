<?php

add_action('show_user_profile', 'cy_github_input');
add_action('edit_user_profile', 'cy_github_input');


function cy_github_input(WP_USER $user)
{

    $github = get_user_meta($user->ID, 'github', true);

?>

    <table class="form-table" role="presentation">
        <tbody>




            <tr class="user-first-name-wrap">
                <th><label for="github">آدرس گیتهاب</label></th>
                <td>
                    <input type="text" name="github" id="github" value="<?= $github ?>" autocomplete="given-name"
                        class="regular-text">
                </td>
            </tr>


        </tbody>
    </table>

<?php
}




add_action('personal_options_update', 'store_github_link');

function store_github_link(int $user_id)
{
    update_user_meta($user_id, 'github', $_POST['github']);
}


add_action('edit_user_profile_update', 'store_other_user_github_link');

function store_other_user_github_link(int $user_id)
{
    if (current_user_can('edit_user', $user_id))
        update_user_meta($user_id, 'github', $_POST['github']);
}
