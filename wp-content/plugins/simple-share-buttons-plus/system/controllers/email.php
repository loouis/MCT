<?php

// add email div to footer
add_action('wp_footer', function() use ($ssbp_settings) {
    // open email div
    echo '<div id="ssbp-email-div"><span class="ssbp-x ssbp-close-email-div"></span>';

    // alert
    echo '<div class="ssbp-email-alert" id="ssbp-email-alert"></div>';

    echo '<form id="js-ssbp-email-form" method="post" action=""
                data-success-alert-text="'.$ssbp_settings['email_popup_alert_success'].'"
                data-warning-alert-text="'.$ssbp_settings['email_popup_alert_warning'].'"
                data-brute-alert-text="'.$ssbp_settings['email_popup_alert_brute'].'">
                <input type="hidden" id="fill_me" name="fill_me" value="" />'.
        wp_nonce_field('ssbp-email-nonce').'
                <div class="ssbp-form-group">
                    <label for="email" class="ssbp-required">Friend\'s Email</label>
                    <input type="email" class="ssbp-form-control ssbp-required" id="email" name="email" placeholder="friends@email.com" required>
                </div>
                <div class="ssbp-form-group">
                    <label for="message" class="ssbp-required">Message</label>
                    <textarea maxlength="250" class="ssbp-form-control ssbp-required" rows="6" id="message" name="message" required>'.$ssbp_settings['email_message'].' '.ssbp_current_url().'</textarea>
                </div>
                <div class="ssbp-form-group ssbp-text-align-right">
                    <button id="ssbp-email-send" type="submit" class="ssbp-btn-primary">Send</button>
                </div>
             </form>';

    // add powered by link
    echo '<a href="https://simplesharebuttons.com/plus/?utm_source=plus&utm_medium=plugin_powered_by&utm_campaign=powered_by&utm_content=plus_email" target="_blank"><img class="ssbp-email-powered-by" src="'.plugins_url().'/simple-share-buttons-plus/images/simple-share-buttons-logo-white.png" alt="Simple Share Buttons" /></a>';

    // close email div
    echo '</div>';
});

function ssbp_email_enqueue()
{
    // ajax
    wp_enqueue_script('ssbp_email_send', plugins_url('simple-share-buttons-plus/js/ssbp_email.min.js'), array('jquery'), false, true);
    wp_localize_script('ssbp_email_send', 'ssbpEmail', array(

        // URL to wp-admin/admin-ajax.php to process the request
        'ajax_url' => admin_url('admin-ajax.php'),

        // generate a nonce with a unique ID
        'security' => wp_create_nonce('ssbp_email_send_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'ssbp_email_enqueue');

add_action('wp_ajax_ssbp_email_send', 'ssbp_email_send');
add_action('wp_ajax_nopriv_ssbp_email_send', 'ssbp_email_send');

function ssbp_email_send()
{
    // check honeypot
    if (! empty($_POST['fill_me'])) {
        echo 'bot';
        die;
    }

    // not a bot, include the class file
    include_once 'SSBP_Send_Email.php';

    // initiate class
    $ssbpEmail = new SSBP_Send_Email();

    // potential brute
    if ($ssbpEmail->is_brute()) {
        echo 'brute';
        die;
    }

    // invalid inputs
    if (! $ssbpEmail->valid_inputs($_POST['email'], $_POST['message'])) {
        echo 'check';
        die;
    }

    // send the email
    $ssbpEmail->send_email($_POST['email'], $_POST['message']);

    // add to email log
    $ssbpEmail->log_email(ssbp_current_url(), $_POST['email']);

    // show success
    echo 'success';

    // die so no zero gets returned
    die;
}
