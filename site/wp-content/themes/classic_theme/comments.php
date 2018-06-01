<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Пожалуйста, не загружайте эту страницу напрямую. Спасибо!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">Эта публикация защищена паролем. Пожалуйста, введите его для просмотра комментариев.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('Отзывов нет', '1 отзыв', 'Отзывов (%)' );?> на </h3>
	<h2 class="pagetitle"><?php the_title(); ?></h2>

	<ul class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
			<span class="comment-author"><?php comment_author_link() ?></span> | 
			<span class="commentmetadata"><?php comment_date('d M Y') ?> в <?php comment_time() ?></span>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Спасибо! Ваш комментарий ожидает проверки.</em>
			<?php endif; ?>
			<br />
			<?php if ($comment->comment_approved != '0') : ?>
			<div class="comment-content">
			<?php comment_text() ?>
			</div>
			<?php endif; ?>
		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ul>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->


	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<h3 id="respond">Комментарии закрыты.</h3>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h3 id="respond">У вас есть мнение? Оставьте свой отзыв:</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Вы должны <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">войти</a>, чтобы оставлять комментарии.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Вы вошли как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Выйти с этого аккаунта">Выйти &raquo;</a></p>

<?php else : ?>

<div>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
<span id="name">Имя <?php if ($req) echo "*"; ?></span>
</div>

<div>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
<span id="mail">Почта <?php if ($req) echo "*"; ?></span>
</div>

<div>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
<span id="url">сайт</span>
</div>

<?php endif; ?>

<!--<p><small><strong>XHTML</strong> Вы можете использовать следующие теги: <code><?php echo allowed_tags(); ?></code></small></p>-->

<div>
<textarea name="comment" id="comment" cols="50" rows="7" tabindex="4"></textarea>
</div>

<div>
<input name="submit" type="submit" id="submit" tabindex="5" value="добавить" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</div>

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
