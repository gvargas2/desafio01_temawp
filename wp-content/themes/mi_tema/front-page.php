<?php get_header();

if (!is_home()):
    include('home-content.php');
else:
    include('loop-entradas.php');
endif;

get_footer(); ?>
