<?php
/*
Plugin Name: WP Multi Language Changer
Plugin URI: http://infog.casoft.info/?page_id=595
Description: Write multi language posts and make it easy to change for readers.
Version: 0.5
Author: Evaldo Junior Bento (InFog)
Author URI: http://infog.casoft.info
*/

/*  Copyright 2009 Evaldo Junior Bento  (email : junior@casoft.info)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License 3 as published by
the Free Software Foundation;

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301 USA
*/

/*
* Setting default language
* Available languages are:
* en    : British English
* es    : Spanish
* fr    : French
* gr    : Greek
* it    : Italian
* jp    : Japanise
* pt    : Portuguese
* pt_br : Brazilian Portuguese
* ru    : Russian
* us    : American English
*/

/*
* Change here if you want another language.
*/
$wpmlc_default_lang = 'pt_br';

function wpmlc_add_clickable_flags($content)
{
    /*
    * This function adds the clickable flags in the multi language posts
    */
    global $post;
    $flags_images = '';
    $languages_number = 0;
    $languages = array('en', 'es', 'fr', 'gr', 'it', 'jp', 'pt', 'pt_br', 'ru', 'us');
    foreach ($languages as $language)
    {
        if (strpos($content, "div class=\"{$language}\"") != false)
        {
            // changing the divs to have an id
            $changer = array("<div class=\"{$language}\">" => "<div id=\"wpmlc_text_{$post->ID}_{$language}\" class=\"wpmlc_text_{$post->ID}_{$language}\">");
            $content = strtr($content, $changer);
            // adding the flags
            $image = "wp-content/plugins/wp-multi-language-changer/flags/{$language}.gif";
            $flags_images .= "<img id=\"wpmlc_flag_{$post->ID}_{$language}\" class=\"wpmlc_flag_{$post->ID}_{$language}\" src=\"{$image}\" onClick=\"wpmlc_show_lang('wpmlc_text_{$post->ID}_{$language}', 'wpmlc_text_{$post->ID}_', 'wpmlc_flag_{$post->ID}_{$language}', 'wpmlc_flag_{$post->ID}');\" style=\"border: 3px solid #FFFFFF;\">&nbsp;";
            $languages_number++;
        }
    }
    if ($languages_number > 0)
    {
        $flags = "<div id=\"wpmlc_flags_{$post->ID}\" style=\"width: 100%; display: block !important;\">{$flags_images}</div>";
        $content = $flags . $content;
    }
    return $content;
}

function wpmlc_add_changer_js_function()
{
    /*
    * This function adds a function in javascript that will be called by the
    * clicks in the flags.
    */
    echo "
        <script language=\"javascript\" src=\"wp-content/plugins/wp-multi-language-changer/wpmlc.js\"></script>
    ";
}

function wpmlc_add_default_language()
{
    /*
    * This function defines the default language for posts, it is called in
    * blog's footer
    */
    global $wpmlc_default_lang;
    echo "
        <script language=\"javascript\">
            wpmlc_show_default_language('{$wpmlc_default_lang}');
        </script>
    ";
}

add_filter('the_content', 'wpmlc_add_clickable_flags');
add_action('wp_head', 'wpmlc_add_changer_js_function');
add_action('wp_footer', 'wpmlc_add_default_language');

?>
