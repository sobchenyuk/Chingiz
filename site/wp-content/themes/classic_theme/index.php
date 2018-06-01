<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content-left">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-date"><span class="month"><?php the_time('F')?></span><br /><span class="dayofmonth"><?php the_time('j')?></span></div>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<span class="post-category">Рубрики: <span><?php the_category(', '); ?></span></span>
				<div class="entry">
					<?php the_content('Читать полностью &raquo;'); ?>
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

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Раньше') ?></div>
			<div class="alignright"><?php previous_posts_link('Позже &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Не найдено</h2>
		<p class="center">К сожалению, по вашему запросу ничего не найдено.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

</div>
<!-- close content-left -->
<?php get_footer(); ?>