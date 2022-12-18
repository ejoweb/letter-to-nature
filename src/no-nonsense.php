<?php
/**
 * Easily set the preferred options for No Nonsense
 * 
 * The interface of No Nonsense is nice and intuitive, but it's tedious to set the options for 
 * each new website again and again. Fortunately we can easily set these manually through 
 * code since the plugin stores its settings in the database. 
 *
 * This script adds a No Nonsense utility to store all preferred settings at once
 *
 * @link https://nononsensewp.com/developer.php
 */

/**
 * Save preferred settings for No Nonsense
 */
function ejoweb_save_nononsense_preferred_settings() {

    $preferred_nononsense_options = array(

        'r34nono_admin_bar_logout_link'                                        => 1,
        'r34nono_auto_core_update_send_email_only_on_error'                    => 1,
        'r34nono_core_upgrade_skip_new_bundled'                                => 1,
        'r34nono_disable_site_search'                                          => 1,
        'r34nono_disallow_file_edit'                                           => 1,
        'r34nono_disallow_full_site_editing'                                   => 0,
        'r34nono_hide_admin_bar_for_logged_in_non_editors'                     => 1,
        'r34nono_limit_admin_elements_for_logged_in_non_editors'               => 1,
        'r34nono_login_replace_wp_logo_link'                                   => 0,
        'r34nono_prevent_block_directory_access'                               => 1,
        'r34nono_redirect_admin_to_homepage_for_logged_in_non_editors'         => 1,
        'r34nono_redirect_admin_to_homepage_for_logged_in_non_editors_options' => array(
                                                                                    "prevent_profile_access" => 1
                                                                                  ),
        'r34nono_remove_admin_color_scheme_picker'                             => 1,
        'r34nono_remove_admin_email_check_interval'                            => 1,
        'r34nono_remove_admin_wp_logo'                                         => 1,
        'r34nono_remove_attachment_pages'                                      => 1,
        'r34nono_remove_attachment_pages_options'                              => array(),
        'r34nono_remove_comments_from_admin'                                   => 1,
        'r34nono_remove_comments_from_front_end'                               => 1,
        'r34nono_remove_dashboard_widgets'                                     => 1,
        'r34nono_remove_dashboard_widgets_options'                             => array( 
                                                                                    "dashboard_incoming_links" => 1,
                                                                                    "dashboard_quick_press" => 1,
                                                                                    "dashboard_recent_comments" => 1,
                                                                                    "dashboard_recent_drafts" => 1,
                                                                                    "welcome_panel" => 1,
                                                                                    "dashboard_primary" => 1,
                                                                                  ),
        'r34nono_remove_default_block_patterns'                                => 1,
        'r34nono_remove_duotone_svg_filters'                                   => 1,
        'r34nono_remove_edit_site'                                             => 1,
        'r34nono_remove_front_end_edit_links'                                  => 1,
        'r34nono_remove_global_styles'                                         => 0,
        'r34nono_remove_head_tags'                                             => 1,
        'r34nono_remove_head_tags_options'                                     => array( 
                                                                                    "rsd_link" => 1,
                                                                                    "oembed_linktypes" => 1,
                                                                                    "resource_hints" => 1,
                                                                                    "rest_output_link_wp_head" => 1,
                                                                                    "feed_links" => 1,
                                                                                    "wlwmanifest_link" => 1,
                                                                                    "wp_generator" => 1,
                                                                                    "wp_shortlink_wp_head" => 1,
                                                                                  ),
        'r34nono_remove_howdy'                                                 => 1,
        'r34nono_remove_posts_from_admin'                                      => 1,
        'r34nono_remove_widgets_block_editor'                                  => 1,
        'r34nono_remove_wp_emoji'                                              => 1,
        'r34nono_xmlrpc_disabled'                                              => 1,
        'r34nono_xmlrpc_disabled_options'                                      => array(
                                                                                    "kill_requests" => 1
                                                                                  ),
    );

    // Save the settings
    foreach ($preferred_nononsense_options as $option_name => $value) {
        update_option($option_name, $value);
    }
}

/**
 * Add No Nonsense utility for preferred settings
 */
function ejoweb_add_nononsense_utility_for_preferred_settings($utilities) {

    $utilities['ejoweb_save_nononsense_preferred_settings'] = array(
        'title' => 'Set preferred options',
        'description' => 'This sets all options to preferred values',
        'show_in_admin' => true,
    );

    return $utilities;
}

add_filter( 'r34nono_define_utilities_array', 'ejoweb_add_nononsense_utility_for_preferred_settings' );


