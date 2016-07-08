<?php
/**
 * Template Name: Custom post 
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


?>

<?php 
// the query
$args = array(
	'post_type' => 'user',
	)
;
$wpb_all_query = new WP_Query( $args );

if ( $wpb_all_query->have_posts() ) : ?>

<ul>

	<!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

	<?php endwhile; ?>
	<!-- end of the loop -->

</ul>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php
echo'<pre/>';
var_dump($wpb_all_query)
?>