<?php 
/*
 Template name: Final-Exam-Page
 * */
?>
<?php 
	function Extern_css(){
?>
		<!-- 	styles for final exam pages -->
	<!--<link rel="stylesheet" type="text/css" href="/main-design.css">-->
	<link rel="stylesheet" href="caohagan/css/common.css">
	<link rel="stylesheet" href="caohagan/css/layout.css">
	<link rel="stylesheet" href="caohagan/css/reset.css">
	<link rel="stylesheet" href="caohagan/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="caohagan/css/queryLoader.css">
	
	<script src="/jquery-1.3.2.js"></script>
	<script src="caohagan/js/jquery.min.js"></script>
	<script src="ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="caohagan/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="caohagan/js/queryLoader.js"></script>
	<script type="text/javascript" src="caohagan/js/PIE.js"></script>
	<script type="text/javascript" src="caohagan/js/chg.balloons.js"></script>
	<script type="text/javascript" src="caohagan/js/chg.index.js"></script>
	<script type="text/javascript" src="caohagan/js/chg.framework.js"></script>

<?php 
	}
	add_filter('wp_head', 'Extern_css');
?>
<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- 	<div id="primary" class="content-area"> -->
<!-- 		<main id="main" class="site-main" role="main"> -->

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
// 				$my_id = 422;
// 				$post_id_422 = get_post($my_id); 
// 				echo $post_content = $post_id_422->post_content;
				// Include the page content template.
				get_template_part( 'content', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
// 			exit();
		// End the loop.
		endwhile;
// 		?>

<!-- 		</main> -->
<!-- 	</div> -->

 <?php //get_footer(); ?>
