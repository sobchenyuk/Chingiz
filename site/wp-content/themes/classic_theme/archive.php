<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content-left">
	<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Рубрика &#8216;<?php single_cat_title(); ?>&#8217;</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('d M Y'); ?></h2>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('F Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Архив автора/h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Архив блога</h2>

		<?php } ?>

		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-date"><span class="month"><?php the_time('F')?></span><br /><span class="dayofmonth"><?php the_time('j')?></span></div>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<span class="post-category">Рубрики: <span><?php the_category(', '); ?></span></span>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
				<!-- close entry -->

				<div class="postmetadata">
					<span class="comment"><a href="<?php the_permalink() ?>/#comment"><?php comments_number('Комментариев нет', '1 комментарий', 'Комментариев: %' ); ?></a></span>
					<span class="post-comment"><a href="<?php the_permalink() ?>/#respond">Комментировать</a></span>
					<span class="share-this"><a href="#">Расскажи другу</a></span>
				</div>
			</div>
			<!-- close post -->

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="pagetitle">Не найдено</h2>
	<?php endif; ?>

</div>
<!-- close content-left -->
<?php get_footer(); ?>
