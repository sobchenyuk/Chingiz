<div id="content-right">
	<div id="feeds">
		<span><a href="#">Подписка на RSS-ленту</a><br />последние обновления <br />новостей и публикаций сайта</span>
	</div>
	<!-- close feeds -->
	<div id="right-sidebar" class="sidebar">
		<ul>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')): ?>
				<li><h2>Свежие публикации</h2>
					<ul>
					<?php
					$recentposts = get_posts('numberposts=10');
					foreach ($recentposts as $post)
					{
					setup_postdata($post);
					?>
					<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<?php } ?>
					</ul>
				</li>
                                <li><h2>Архивы</h2>
					<ul>
					<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
			<?php endif; ?>
		</ul>
	</div>
	<!-- end right sidebar -->
	
	<div id="left-sidebar" class="sidebar">
		<ul>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar')): ?>
			<li><h2>О проекте</h2>
			<p>Пару строк о вашем проекте. Редактируется в файле sidebar.php</p>
			</li>		
			<?php wp_list_categories('show_count=1&title_li=<h2>Рубрики</h2>'); ?>
			<?php endif; ?>
		</ul>
	</div>
	<!-- close left-sidebar -->
	
	<div id="links" class="wide-widget">
		<h2>Ссылки</h2>
		<center><a href="#"><img src="<?php bloginfo('stylesheet_directory')?>/images/ad-img.png" alt="" width="125px" height="125px" /></a>
		<a href="#"><img src="<?php bloginfo('stylesheet_directory')?>/images/ad-img.png" alt="" width="125px" height="125px" /></a>
		<a href="#"><img src="<?php bloginfo('stylesheet_directory')?>/images/ad-img.png" alt="" width="125px" height="125px" /></a></center>
	</div>
	<!-- close links -->
</div>
<!-- close content-right -->		
