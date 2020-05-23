<?php

namespace App\Controllers;

use Sober\Controller\Controller;

use function App\asset_path;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    /**
     * Primary Nav Menu arguments
     * @return array
     */
    public function primaryMenu()
    {
        $args = array(
            'theme_location'    => 'primary_navigation',
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarSupportedContent',
            'menu_class'        => 'navbar-nav ml-auto',
            'walker'            => new \App\wp_bootstrap4_navwalker(),
          );

          return $args;
    }

    public function siteBrand()
    {
        $name = get_bloginfo( 'name' );
        $title = get_bloginfo('name') . ' - ' . get_bloginfo('description');
        $src = has_custom_logo() ? wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ) : [ asset_path('images/saferkidsph-logo.png'), 395, 89 ];

        $output = "<span class='sr-only'>{$name}</span>";
        $logo = "<img class='img-fluid' src='{$src[0]}' alt='{$name}' title='{$title}' width='{$src[1]}' height='{$src[2]}'>";
        return $output .= $logo;
    }
}
