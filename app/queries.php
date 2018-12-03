<?php

namespace App;

/*
 * Grabs the recent blog stories for the home page.
 */

function getBlogStories()
{
    return wp_get_recent_posts(
        [
            'numberposts' => 3,
            'category_name' => 'Blog'
        ]
    );
}

/*
 * Grabs the recent featured podcasts for the home page.
 */

function getFeaturedPodcasts()
{
    return wp_get_recent_posts(
        [
            'numberposts' => 3,
            'category_name' => 'Podcasts'
        ]
    );
}

/**
 * Get rid of category key word in page title
 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ;
    }
    return $title;
});
