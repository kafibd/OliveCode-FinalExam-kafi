<?php
/*
	Template name:Extern
 */
?>
<?php 
	function Extern_css(){
?>
		<link rel="stylesheet" href="<?php bloginfo("template_url")?>/Extern.css" type="text/css">
<?php 
	}
	add_filter('wp_head', 'Extern_css');
?>
<?php get_header();?>
<body>
	<p>
		Adrian was running again. From both sides of the path he could feel the heat of burning rock, and with each
		step he could see that he was just out of reach of the hands that tried to grab at his feet. If he slowed 
		down or lost his footing then they would have him. Fear gripped his heart with every footfall as he dared not
		to look behind him in order to see what was coming. And then it happened. Adrian tripped and fell. He screamed
		as unseen hands clamped around his legs and began to pull him down, and as he looked up through blurred vision 
		caused by heat and sweat he could just make out someone walking towards him, and with one final scream, Adrian 
		woke up...
		<a id="elink" href="http://www.short-story.me/mystery-stories/776-sweet-dreams.html" target="_blank">read full story</a>
	</p>

</body>
<?php get_sidebar('right');?>
<?php get_footer();?>
