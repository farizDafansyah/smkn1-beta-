<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('entry');
        comments_template();
    endwhile;
endif;
echo 'a';
get_template_part('nav', 'below');
get_footer();
echo 'n';