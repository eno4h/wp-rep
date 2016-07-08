<?php
/**
 * Template Name: All posts 
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


?>
<?php 
get_header();

?>

<div id="posts">asdad
<?php 
// the query
$args = array(
	'post_type' => 'post',
);
$wpb_all_query = new WP_Query( $args );

if ( $wpb_all_query->have_posts() ) : ?>

<ul>

	<!-- the loop -->
	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		<?php
	    $post_title = get_the_title(get_the_ID ());
		 $size = strlen($post_title) ;
		?>
		<?php if($size>10):?>
		<h1><li><a href="<?php the_permalink(); ?>"><?php echo substr($post_title, 0, 10)." Read More.... Size : ". $size ?></a></li>  <?php endif?></h1>
		<?php if($size<10):?>
	<h1>	<li><a href="<?php the_permalink(); ?>"><?php echo $post_title." Size : ". $size ?></a></li>
         <?php endif?></h1>
         <?php the_content(); ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

</ul>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
<?php
get_footer();
?>