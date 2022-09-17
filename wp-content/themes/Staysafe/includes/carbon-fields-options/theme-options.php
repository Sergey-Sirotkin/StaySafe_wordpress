<?php 

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Website settings' ) )
        ->add_tab('Common fields', array(
            Field::make( 'text', 'site_phone', 'Phone (text)' )
            ->set_width(50)
            ->set_help_text( 'Phone number (with spaces and +)' ),
            Field::make( 'text', 'site_phone_digits', 'Phone (numbers only!)' )
            ->set_width(50)
            ->set_help_text( 'Phone number (numbers ONLY, without spaces)' ),
            Field::make( 'text', 'site_email', 'Email' )
            ->set_help_text( 'Put here your email' ),
            Field::make( 'text', 'facebook', 'Facebook link' )
            ->set_width(50)
            ->set_help_text( 'Put here link of your Facebook' ),
            Field::make( 'text', 'instagram', 'Instagram link' )
            ->set_width(50)
            ->set_help_text( 'Put here link of your Instagram' ),
            Field::make( 'textarea', 'address_text'.carbon_lang_prefix(), 'Address text' )
            ->set_help_text( 'Put here your address (Do not delete "br" tag - this is a line breaker)' ),
            Field::make( 'text', 'address_link', 'Address link' )
            ->set_help_text( 'Link of your address (Google maps for example)' ),
            Field::make( 'text', 'donate_text'.carbon_lang_prefix(), 'Donate button text' )
            ->set_width(50)
            ->set_help_text( 'Put here text for all "Donate now" buttons' ),
            Field::make( 'text', 'donate', 'Link of "Donate now" buttons' )
            ->set_width(50)
            ->set_help_text( 'Put here link for all "Donate now" buttons' ),
            Field::make( 'text', 'copy', 'Copyright' )
            ->set_help_text( 'Copyright text at foooter' ),
        ) 
    )
    ->add_tab('OUR PARTNERS', array(
        Field::make( 'text', 'our_partners_title'.carbon_lang_prefix(), 'Title' )
            ->set_help_text( 'Title at OUR PARTNERS sections at Homepage and For businesses page ' ),
        Field::make( 'complex', 'our_partners_items', __( 'Partners' ) )
        ->set_help_text( 'Here you can add and remove images at OUR PARTNERS section' )
            ->setup_labels([
                'plural_name' => 'partner',
                'singular_name' => 'partner',
            ])
            ->add_fields( array(
            Field::make( 'image', 'our_partners_image', __( 'Partner image' ) )
            ->set_help_text( 'Image of partner at OUR PARTNERS section' )
            ) ),
    ) 
);