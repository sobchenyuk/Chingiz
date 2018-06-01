<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content-left">
<h2 class="pagetitle">Архив по месяцам:</h2>
	<ul class="archive-list">
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
<br /><br /><br />
<h2 class="pagetitle">Архив по рубрикам:</h2>
	<ul class="archive-list">
		 <?php wp_list_categories(); ?>
	</ul>
</div>
<!-- close content-left -->
<?php get_footer(); ?>

