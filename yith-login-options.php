<?php
/**
 * Main admin class
 *
 * @author Your Inspiration Themes
 * @package YITH Custom Login
 * @version 1.0.2
 */

if ( !defined( 'YITH_LOGIN' ) ) { exit; } // Exit if accessed directly

global $yith_login_options;
$yith_login_options = array(
    //tab general
    'general' => array(
        'label' => __('General', 'yit'),
        'sections' => array(
            'general' => array(
                'title' =>  __('General Settings', 'yit'),
                'description' => '',
                'fields' => array(
                    'yith_login_enable' => array(
                        'title' => __('Enable Custom Login', 'yit'),
                        'description' => __( 'Enabling this, you will be able to have a custom style for the login page.', 'yit' ),
                        'type' => 'checkbox',
                        'std' => true
                    ),

                    'yith_login_mascotte' => array(
                        'title' => __( 'Show Mascotte image', 'yit' ),
                        'description' => __( 'Say if you want to show the mascotte image near the login form.', 'yit' ),
                        'type' => 'checkbox',
                        'std' => true
                    ),

                    'yith_login_mascotte_url' => array(
                        'title' => __( 'Mascotte image URL', 'yit' ),
                        'description' => __( 'Set the URL for the mascote image near the login form, if you set to show it in the above option.', 'yit' ),
                        'type' => 'upload',
                        'std' => YITH_LOGIN_URL . 'assets/images/mascotte.png'
                    ),

                    'yith_login_custom_style' => array(
                        'title' => 'Custom CSS',
                        'description' => 'Custom CSS Style',
                        'type' => 'textarea',
                        'std' => ''
                    ),
                )
            ),
        )
    ),

    //tab background
    'background' => array(
        'label' => __('Background', 'yit'),
        'sections' => array(
            'background' => array(
                'title' =>  __('Background Settings', 'yit'),
                'description' => __('Customize the background of the page', 'yit'),
                'fields' => array(
                    'yith_login_background_image' => array(
                        'title' =>  __('Background image', 'yit'),
                        'description' => __('Upload or choose from your media library the background image', 'yit'),
                        'type' => 'upload',
                        'std' => YITH_LOGIN_URL . 'assets/images/bg-pattern.png',
                    ),
                    'yith_login_background_color' => array(
                        'title' =>  __('Background Color', 'yit'),
                        'description' => __('Choose a background color', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '',
                    ),
                    'yith_login_background_repeat' => array(
                        'title' =>  __('Background Repeat', 'yit'),
                        'description' => __( 'Select the repeat mode for the background image.', 'yit' ),
                        'type' => 'select',
                        'std' => apply_filters( 'yith_login_background_repeat_std', 'repeat' ),
                        'options' => array(
                            'repeat' => __( 'Repeat', 'yit' ),
                            'repeat-x' => __( 'Repeat Horizontally', 'yit' ),
                            'repeat-y' => __( 'Repeat Vertically', 'yit' ),
                            'no-repeat' => __( 'No Repeat', 'yit' ),
                        )
                    ),
                    'yith_login_background_position' => array(
                        'title' =>  __('Background Position', 'yit'),
                        'description' =>  __( 'Select the position for the background image.', 'yit' ),
                        'type' => 'select',
                        'options' => array(
                            'center' => __( 'Center', 'yit' ),
                            'top left' => __( 'Top left', 'yit' ),
                            'top center' => __( 'Top center', 'yit' ),
                            'top right' => __( 'Top right', 'yit' ),
                            'bottom left' => __( 'Bottom left', 'yit' ),
                            'bottom center' => __( 'Bottom center', 'yit' ),
                            'bottom right' => __( 'Bottom right', 'yit' ),
                        ),
                        'std' => apply_filters( 'yith_login_background_position_std', 'top left' )
                    ),
                    'yith_login_background_attachment' => array(
                        'title' =>  __('Background Attachment', 'yit'),
                        'description' => __( 'Select the attachment for the background image.', 'yit' ),
                        'type' => 'select',
                        'options' => array(
                            'scroll' => __( 'Scroll', 'yit' ),
                            'fixed' => __( 'Fixed', 'yit' ),
                        ),
                        'std' => apply_filters( 'yith_login_background_attachment_std', 'scroll' )
                    )
                )
            )
        )
    ),

    //tab logo
    'logo' => array(
        'label' => __('Logo', 'yit'),
        'sections' => array(
            'logo' => array(
                'title' =>  __('Logo Settings', 'yit'),
                'description' => __('Customize the logo', 'yit'),
                'fields' => array(
                    'yith_login_logo_image' => array(
                        'title' =>  __('Logo image', 'yit'),
                        'description' => __('Upload or choose from your media library the logo image', 'yit'),
                        'type' => 'upload',
                        'std' => YITH_LOGIN_URL . 'assets/images/logo.png',
                    ),
                    'yith_login_logo_color' => array(
                        'title' =>  __('Background Color', 'yit'),
                        'description' => __('Choose a background color for the logo', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '',
                    ),
                    'yith_login_logo_width' => array(
                        'title' =>  __('Logo width', 'yit'),
                        'description' => __('The width of logo', 'yit'),
                        'type' => 'number',
                        'std' => 196,
                    ),
                    'yith_login_logo_height' => array(
                        'title' =>  __('Logo height', 'yit'),
                        'description' => __('The height of logo', 'yit'),
                        'type' => 'number',
                        'std' => 53,
                    )
                )
            )
        )
    ),

    //tab container
    'form' => array(
        'label' => __('Form', 'yit'),
        'sections' => array(
            'settings' => array(
                'title' =>  __('Settings', 'yit'),
                'description' => __('Customize the form', 'yit'),
                'fields' => array(
                    'yith_login_container_width' => array(
                        'title' =>  __('Container Width', 'yit'),
                        'description' => __('The width in pixels of the login container', 'yit'),
                        'type' => 'number',
                        'std' => 275,
                        'step' => 1,
                        'min' => 320,
                        'max' => 800
                    ),
                    'yith_login_username_label' => array(
                        'title' =>  __('Username placeholder', 'yit'),
                        'description' => __('The placeholder for the username field', 'yit'),
                        'type' => 'text',
                        'std' => 'Username *'
                    ),
                    'yith_login_password_label' => array(
                        'title' =>  __('Password placeholder', 'yit'),
                        'description' => __('The placeholder for the password field', 'yit'),
                        'type' => 'text',
                        'std' => 'Password *'
                    )
                )
            ),
            'typography' => array(
                'title' =>  __('Typography', 'yit'),
                'description' => '',
                'fields' => array(
                    'yith_login_typo_input' => array(
                        'title' =>  __('Text of fields', 'yit'),
                        'description' => __('The text typography for the username and password fields.', 'yit'),
                        'type' => 'typography',
                        'std' => array(
                            'size' => 12,
                            'unit' => 'px',
                            'family' => 'Open Sans',
                            'style' => 'regular',
                            'color' => '#b4b4b4',
                        ),
                    ),
                    'yith_login_typo_text' => array(
                        'title' =>  __('General text', 'yit'),
                        'description' => __('Set typography options for other texts (as Remember me).', 'yit'),
                        'type' => 'typography',
                        'std' => array(
                            'size' => 12,
                            'unit' => 'px',
                            'family' => 'Open Sans',
                            'style' => 'regular',
                            'color' => '#999999',
                        ),
                    ),
                    'yith_login_typo_submit' => array(
                        'title' =>  __('Submit button text', 'yit'),
                        'description' => __('Set typography options for the text inside submit button.', 'yit'),
                        'type' => 'typography',
                        'std' => array(
                            'size' => 15,
                            'unit' => 'px',
                            'family' => 'Open Sans',
                            'style' => 'extra-bold',
                            'color' => '#ffffff',
                        ),
                    ),
                    'yith_login_typo_submit_hover' => array(
                        'title' =>  __('Submit button text, on hover', 'yit'),
                        'description' => __('Set typography options for the text inside submit button, when mouse hover.', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '#ffffff',
                    ),
                )
            ),
            'colors' => array(
                'title' =>  __('Colors', 'yit'),
                'description' => '',
                'fields' => array(
                    'yith_login_color_input' => array(
                        'title' =>  __('Fields background', 'yit'),
                        'description' => __('The background color of the fields username and password.', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '#f2f2f2',
                    ),
                    'yith_login_border_input' => array(
                        'title' =>  __('Fields border color', 'yit'),
                        'description' => __('The border color of the fields username and password.', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '#b4b4b4',
                    ),
                    'yith_login_color_input_focus' => array(
                        'title' =>  __('Fields background, on focus', 'yit'),
                        'description' => __('The background color of the fields username and password, on focus.', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '#ffffff',
                    ),
                    'yith_login_border_input_focus' => array(
                        'title' =>  __('Fields border color, on focus', 'yit'),
                        'description' => __('The border color of the fields username and password, on focus.', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '#8a8a8a',
                    ),
                    'yith_login_submit_color' => array(
                        'title' =>  __('Background color of submit ', 'yit'),
                        'description' => __('The background color of submit button.', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '#617291',
                    ),
                    'yith_login_submit_border_color' => array(
                        'title' =>  __('Border color of submit ', 'yit'),
                        'description' => __('The border color of submit button.', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '#3c5072',
                    ),
                    'yith_login_submit_color_hover' => array(
                        'title' =>  __('Background color of submit, on hover', 'yit'),
                        'description' => __('The background color of submit button, on mouseover.', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '#3c5072',
                    ),
                    'yith_login_submit_border_color_hover' => array(
                        'title' =>  __('Border color of submit, on hover', 'yit'),
                        'description' => __('The border color of submit button, on mouseover.', 'yit'),
                        'type' => 'colorpicker',
                        'std' => '#3c5072',
                    ),
                )
            )
        )
    )
);
