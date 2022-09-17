<?php 

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __( 'Home page redactor' ) )
->show_on_template('home.php')

        ->add_tab('Main screen', array(
            Field::make( 'text', 'main_title'.carbon_lang_prefix(), 'Title' )
            ->set_width(50)
            ->set_help_text( 'Title at main screen (Do not delete "br" tag - this is a line breaker)' ),
            Field::make( 'text', 'main_subtitle'.carbon_lang_prefix(), 'Subtitle' )
            ->set_width(50)
            ->set_help_text( 'Subtitle at main screen (Do not delete "br" tag - this is a line breaker)' ),
            Field::make( 'text', 'main_socials_text'.carbon_lang_prefix(), 'Text under social icons' )
            ->set_help_text( 'Here you can edit text under social icons at main screen' ),
            ) 
        )
        ->add_tab('Together for humanity', array(
            Field::make( 'text', 'together_subtitle'.carbon_lang_prefix(), 'Subtitle' )
            ->set_width(50)
            ->set_help_text( 'Subtitle at Together for humanity section (Do not delete "br" tag - this is a line breaker)' ),
            Field::make( 'text', 'together_title'.carbon_lang_prefix(), 'Title' )
            ->set_width(50)
            ->set_help_text( 'Title at Together for humanity section' ),
            Field::make( 'textarea', 'together_text'.carbon_lang_prefix(), 'Text' )
            ->set_help_text( 'Text at Together for humanity section' ),
            Field::make( 'text', 'together_label'.carbon_lang_prefix(), 'Lists label' )
            ->set_help_text( 'List label at Together for humanity section' ),
            Field::make( 'complex', 'together_list_left'.carbon_lang_prefix(), __( 'Left list' ) )
            ->set_help_text( 'Here you can add, remove and edit rows at left list at Together for humanity section' )
                ->setup_labels([
                    'plural_name' => 'row',
                    'singular_name' => 'row',
                ])
                ->set_width(50)
                ->add_fields( array(
                Field::make( 'text', 'together_list_left_item'.carbon_lang_prefix(), __( 'Text of the row' ) ),
                ) ),
            Field::make( 'complex', 'together_list_right'.carbon_lang_prefix(), __( 'Right list' ) )
            ->set_help_text( 'Here you can add, remove and edit rows at right list at Together for humanity section' )
                ->setup_labels([
                    'plural_name' => 'row',
                    'singular_name' => 'row',
                ])
                ->set_width(50)
                ->add_fields( array(
                Field::make( 'text', 'together_list_right_item'.carbon_lang_prefix(), __( 'Text of the row' ) ),
                ) ),
            Field::make( 'text', 'together_btn'.carbon_lang_prefix(), 'Button text' )
            ->set_help_text( 'Button text at Together for humanity section' ),
            Field::make( 'image', 'together_img', 'Image' )
            ->set_help_text( 'Image at Together for humanity section' ),
            ) 
        )
        
        ->add_tab('Meet the team', array(
            Field::make( 'text', 'meet_team_title'.carbon_lang_prefix(), 'Title' )
            ->set_width(50)
            ->set_help_text( 'Title at Meet the team section' ),
            Field::make( 'text', 'meet_team_subtitle'.carbon_lang_prefix(), 'Subtitle' )
            ->set_width(50)
            ->set_help_text( 'Subtitle at Meet the team section' ),
            Field::make( 'textarea', 'meet_team_text'.carbon_lang_prefix(), 'Text under subtitle' )
            ->set_help_text( 'Text at Meet the team section (under subtitle). (Do not delete "br" tag - this is a line breaker)' ),
            Field::make( 'complex', 'meet_team_item'.carbon_lang_prefix(), __( 'Item' ) )
            ->set_help_text( 'Here you can add, remove and edit items at Meet the team section' )
                ->setup_labels([
                    'plural_name' => 'item',
                    'singular_name' => 'item',
                ])
                ->add_fields( array(
                Field::make( 'image', 'meet_team_item_image'.carbon_lang_prefix(), __( 'Item image' ) )
                ->set_width(20),
                Field::make( 'text', 'meet_team_item_title'.carbon_lang_prefix(), __( 'Item title' ) )
                ->set_width(40),
                Field::make( 'text', 'meet_team_item_subtitle'.carbon_lang_prefix(), __( 'Item subtitle' ) )
                ->set_width(40),
                ) ),
            Field::make( 'text', 'meet_team_btn'.carbon_lang_prefix(), 'Button text' )
            ->set_help_text( 'Button text at Meet the team section' ),
            )
        )
        
        ->add_tab('Do Well By Doing Good', array(
            Field::make( 'text', 'do_well_title'.carbon_lang_prefix(), 'Title' )
            ->set_help_text( 'Title at Do Well By Doing Good section. Text between "span" tags becomes blue and have yellow decoration on its background' ),
            Field::make( 'image', 'do_well_img_01', 'Item image-01' )
            ->set_width(20)
            ->set_help_text( 'Image for first item at Do Well By Doing Good section' ),
            Field::make( 'text', 'do_well_item_title_01'.carbon_lang_prefix(), 'Item title-01' )
            ->set_width(40)
            ->set_help_text( 'Title for first item at Do Well By Doing Good section' ),
            Field::make( 'textarea', 'do_well_item_text_01'.carbon_lang_prefix(), 'Item text-01' )
            ->set_width(40)
            ->set_help_text( 'Text for first item at Do Well By Doing Good section (Do not delete "br" tag - this is a line breaker)' ),
            Field::make( 'image', 'do_well_img_02', 'Item image-02' )
            ->set_width(20)
            ->set_help_text( 'Image for second item at Do Well By Doing Good section' ),
            Field::make( 'text', 'do_well_item_title_02'.carbon_lang_prefix(), 'Item title-02' )
            ->set_width(40)
            ->set_help_text( 'Title for second item at Do Well By Doing Good section' ),
            Field::make( 'textarea', 'do_well_item_text_02'.carbon_lang_prefix(), 'Item text-02' )
            ->set_width(40)
            ->set_help_text( 'Text for second item at Do Well By Doing Good section' ),
            Field::make( 'text', 'do_well_item_btn_02'.carbon_lang_prefix(), 'Button text-02' )
            ->set_help_text( 'Text for button at second item, at Do Well By Doing Good section' ),
            )
        )
        ->add_tab('Contact us', array(
            Field::make( 'text', 'contact_title'.carbon_lang_prefix(), 'Title' )
            ->set_width(33)
            ->set_help_text( 'Title at Contact us section' ),
            Field::make( 'text', 'contact_subtitle'.carbon_lang_prefix(), 'Subtitle' )
            ->set_width(33)
            ->set_help_text( 'Subtitle at Contact us section' ),
            Field::make( 'text', 'contact_right_title'.carbon_lang_prefix(), 'Contact-right Title' )
            ->set_width(33)
            ->set_help_text( 'Title at right side of Contact us section' ),
            Field::make( 'text', 'contact_phone'.carbon_lang_prefix(), 'Phone-label text' )
            ->set_width(33)
            ->set_help_text( 'Phone label at right side of Contact us section' ),
            Field::make( 'text', 'contact_email'.carbon_lang_prefix(), 'Email-label text' )
            ->set_width(33)
            ->set_help_text( 'Email label at right side of Contact us section' ),
            Field::make( 'text', 'contact_address'.carbon_lang_prefix(), 'Address-label text' )
            ->set_width(33)
            ->set_help_text( 'Address label at right side of Contact us section' ),
            Field::make( 'textarea', 'contact_payment'.carbon_lang_prefix(), 'Payment details' )
            ->set_width(60)
            ->set_help_text( 'Payment details at right side of Contact us section (Do not delete "br" tag - this is a line breaker)' ),
            Field::make( 'text', 'contact_socials'.carbon_lang_prefix(), 'Socials-label text' )
            ->set_width(40)
            ->set_help_text( 'Socials label at right side of Contact us section' ),
            ) 
        )
        ->add_tab('Our actions', array(
            Field::make( 'text', 'our_actions_title'.carbon_lang_prefix(), 'Title' )
            ->set_width(50)
            ->set_help_text( 'Title at Our actions section' ),
            Field::make( 'text', 'our_actions_subtitle'.carbon_lang_prefix(), 'Subtitle' )
            ->set_width(50)
            ->set_help_text( 'Subtitle at Our actions section' ),
            Field::make( 'complex', 'our_actions_items'.carbon_lang_prefix(), __( 'Item' ) )
            ->set_help_text( 'Here you can add, remove and edit items at Our actions section' )
                ->setup_labels([
                    'plural_name' => 'item',
                    'singular_name' => 'item',
                ])
                ->add_fields( array(
                Field::make( 'text', 'our_actions_index'.carbon_lang_prefix(), __( 'Item index' ) )
                ->set_help_text( 'Index number of item' )
                ->set_width(25),
                Field::make( 'image', 'our_actions_image'.carbon_lang_prefix(), __( 'Item image' ) )
                ->set_help_text( 'Image of item at Our actions section' )
                ->set_width(25),
                Field::make( 'image', 'our_actions_decor'.carbon_lang_prefix(), __( 'Item decor' ) )
                ->set_help_text( 'Here you can choose decors with different hashtegs on it' )
                ->set_width(25),
                Field::make( 'text', 'our_actions_item_title'.carbon_lang_prefix(), __( 'Item title' ) )
                ->set_help_text( 'Title of item at Our actions section' )
                ->set_width(25),
                Field::make( 'textarea', 'our_actions_item_text'.carbon_lang_prefix(), __( 'Item text' ) )
                ->set_help_text( 'Text of item at Our actions section (Do not delete "br" tag - this is a line breaker)' ),
                ) ),
            Field::make( 'text', 'our_actions_btn_text'.carbon_lang_prefix(), __( 'Buttons text' ) )
            ->set_help_text( 'Text on the buttons (at every item) at Our actions section' ),
            ) 
        )
        ->add_tab('Photo reports', array(
            Field::make( 'text', 'photo_reports_title'.carbon_lang_prefix(), 'Title' )
            ->set_help_text( 'Title at Photo reports section' ),
            Field::make( 'image', 'photo_reports_img_01', 'Image-01' )
            ->set_width(50)
            ->set_help_text( 'First image at Photo reports section' ),
            Field::make( 'textarea', 'photo_reports_text-01'.carbon_lang_prefix(), 'Text-01' )
            ->set_width(50)
            ->set_help_text( 'Text at first image at Photo reports section' ),
            Field::make( 'image', 'photo_reports_img_02', 'Image-02' )
            ->set_width(50)
            ->set_help_text( 'Second image at Photo reports section' ),
            Field::make( 'textarea', 'photo_reports_text-02'.carbon_lang_prefix(), 'Text-02' )
            ->set_width(50)
            ->set_help_text( 'Text at second image at Photo reports section' ),
            Field::make( 'image', 'photo_reports_img_03', 'Image-03' )
            ->set_width(50)
            ->set_help_text( 'Third image at Photo reports section' ),
            Field::make( 'textarea', 'photo_reports_text-03'.carbon_lang_prefix(), 'Text-03' )
            ->set_width(50)
            ->set_help_text( 'Text at third image at Photo reports section' ),
            Field::make( 'image', 'photo_reports_img_04', 'Image-04' )
            ->set_width(50)
            ->set_help_text( 'Fourth  image at Photo reports section' ),
            Field::make( 'textarea', 'photo_reports_text-04'.carbon_lang_prefix(), 'Text-04' )
            ->set_width(50)
            ->set_help_text( 'Text at fourth  image at Photo reports section' ),
            Field::make( 'image', 'photo_reports_img_05', 'Image-05' )
            ->set_width(50)
            ->set_help_text( 'Last (large one) image at Photo reports section' ),
            Field::make( 'textarea', 'photo_reports_text-05'.carbon_lang_prefix(), 'Text-05' )
            ->set_width(50)
            ->set_help_text( 'Text at last (large one) image at Photo reports section' ),
            )
        );

        
Container::make( 'post_meta', __( 'What we do redactor' ) )
->show_on_template('templates/what-we-do.php')
        
        ->add_tab('Main screen', array(
            Field::make( 'text', 'what_main_subtitle'.carbon_lang_prefix(), 'Subtitle' )
            ->set_width(50)
            ->set_help_text( 'Subtitle at main screen' ),
            Field::make( 'text', 'what_main_title'.carbon_lang_prefix(), 'Title' )
            ->set_width(50)
            ->set_help_text( 'Title at main screen' ),
            Field::make( 'textarea', 'what_main_text_01'.carbon_lang_prefix(), 'First text' )
            ->set_width(50)
            ->set_help_text( 'Here you can edit first text at main screen' ),
            Field::make( 'textarea', 'what_main_text_02'.carbon_lang_prefix(), 'Second text' )
            ->set_width(50)
            ->set_help_text( 'Here you can edit second text at main screen' ),
            Field::make( 'image', 'what_main_img', 'Image' )
            ->set_help_text( 'Image at main screen' ),
            ) 
        )
        ->add_tab('Latest news', array(
            Field::make( 'text', 'latest_news_title'.carbon_lang_prefix(), 'Title' )
            ->set_help_text( 'Title at Latest news section' ),
            Field::make( 'complex', 'news_items'.carbon_lang_prefix(), __( 'News' ) )
            ->set_help_text( 'Here you can add, remove and edit news at Latest news section' )
                ->setup_labels([
                    'plural_name' => 'news',
                    'singular_name' => 'news',
                ])
                ->add_fields( array(
                Field::make( 'image', 'news_img'.carbon_lang_prefix(), __( 'News image' ) )
                ->set_help_text( 'Image at the news' )
                ->set_width(33),
                Field::make( 'text', 'news_title'.carbon_lang_prefix(), __( 'News title' ) )
                ->set_help_text( 'Title of the news' )
                ->set_width(33),
                Field::make( 'textarea', 'news_text'.carbon_lang_prefix(), __( 'News text' ) )
                ->set_help_text( 'Text at the news' )
                ->set_width(33),
                ) ),
            ) 
        )
        ->add_tab('How can you help?', array(
            Field::make( 'text', 'help_title'.carbon_lang_prefix(), 'Title' )
            ->set_width(33)
            ->set_help_text( 'Title at How can you help section' ),
            Field::make( 'textarea', 'help_text'.carbon_lang_prefix(), 'Text' )
            ->set_width(33)
            ->set_help_text( 'Text at How can you help section (Do not delete "br" tag - this is a line breaker)' ),
            Field::make( 'text', 'help_btn'.carbon_lang_prefix(), 'Second button text' )
            ->set_width(33)
            ->set_help_text( 'Text of the second button at How can you help section' ),
            ) 
        )
        ->add_tab('Photos', array(
            Field::make( 'text', 'photos_title'.carbon_lang_prefix(), 'Title' )
            ->set_help_text( 'Title at Photos section' ),
            Field::make( 'complex', 'photos_items'.carbon_lang_prefix(), __( 'Photos items' ) )
            ->set_help_text( 'Here you can add, remove and edit items at Photos section' )
                ->setup_labels([
                    'plural_name' => 'item',
                    'singular_name' => 'item',
                ])
                ->add_fields( array(
                Field::make( 'image', 'photos_image'.carbon_lang_prefix(), __( 'Item image' ) )
                ->set_width(50),
                Field::make( 'textarea', 'photos_text'.carbon_lang_prefix(), __( 'Item text' ) )
                ->set_width(50),
                ) ),
            ) 
        );