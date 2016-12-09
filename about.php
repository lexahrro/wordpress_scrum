<?php 
/**
* Template Name: NEWS
*/
get_header();
?>

<?php 
$wp = query_posts('post_type=news&posts_per_page=3&order=DESC'); // type du magic field, prend les 3 derniers locations, trier par ordre décroissant
	if(have_posts()) : while(have_posts()) : the_post();
		the_title();
		the_content();
		the_excerpt();
		the_post_thumbnail();
	endwhile; endif;
?>


<?php

get_footer();

?>