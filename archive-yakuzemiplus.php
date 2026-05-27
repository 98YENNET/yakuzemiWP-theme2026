<?php get_header(); ?>

<div class="page-contents">

	<div class="left-contents">
	 <?php get_template_part('include/breadcrumbs'); ?>

	<article class="post mb50">
		<h1 class="page-title">YAKUZEMI PLUS</h1>
<?php if ( !is_paged() ) : // 1ページ目のみ表示 ?>
		<section class="mb50">

		<h2 class="sec-title">YAKUZEMI PLUS（ヤクゼミプラス）とは？</h2>
		<p>薬学をもっと楽しもう、薬剤師に夢をもとう！ そんな想いから創刊されたのが「YAKUZEMI PLUS」です。<br />長年に渡って蓄積されたノウハウから薬ゼミ独自の視点による国試、CBT、リメディアル対策を毎号発信中。その他、薬剤師として必要な知識、経験などを数多くご紹介。ちょっと役立つコラムなども掲載中です！</p>
<p>そして表紙にはその時の旬ともいえるタレントを起用して、読者の皆さんにメッセージやこんな生き方もあるというエピソードも交え、薬ゼミならではの貴重なインタビューを掲載しています。</p>
<p>「YAKUZEMI PLUS」は全国の薬系大学と薬学ゼミナールの全教室に設置しています。どの学年の方にも気軽に読んでもらえるような、盛りだくさんの内容になっていますので、是非一度ご覧ください！</p>
			
<p>※配送サービスは終了しました。No.49以降は、下記より各号の「デジタルブック」をご覧ください。<br />
※全国の薬ゼミ教室に在庫がある場合、教室へお越しの方へお一人様1冊限定でお渡ししております。在庫状況は<a href="https://www.yakuzemi.ac.jp/classroom-maps/" target="_blank">各教室</a>へお問い合わせください。</p><!--

		<p><a href="https://forms.gle/oRstVUPoYkiG5W5u9" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/pagebanner_yakuzemiplus.png" alt="YAKUZEMI PLUS アンケートはこちら"></a></p>
		--></section>

		<section class="mb50 clearfix">
		<h2 class="sec-title">最新号</h2>
		<?php
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$loop = new WP_Query(array(
			'paged' => $paged,
			'post_type' => 'yakuzemiplus',
			'posts_per_page' => 1,
			));
			if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
		?>
		<div class="yakuzemiplus-top-image ">
			<img src="<?php the_field('表紙画像'); ?>" alt="<?php the_title(); ?>" />
		</div>
		<div class="yakuzemiplus-top-box">
			<h3><?php the_title(); ?><br><?php the_field('発行年'); ?> <?php the_field('発行時期'); ?></h3>
			<h4><a href="<?php the_field('目次pdf'); ?>">掲載内容 目次</a></h4>
			<p><?php the_field('補足事項'); ?></p>
		</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</section>

		<section class="mb50">
		<h2 class="sec-title">BACK NUMBERS</h2>
		<ul class="yakuzemiplus-list">
		<?php
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$loop = new WP_Query(array(
			'paged' => $paged,
			'post_type' => 'yakuzemiplus',
			'posts_per_page' => 10,
			'post__not_in'=> array(get_the_ID()), //現在表示している投稿を除外
			));
			if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
		?>
		<li class="clearfix">
		<div class="yakuzemiplus-image ">
			<img src="<?php the_field('表紙画像'); ?>" alt="<?php the_title(); ?>" />
		</div>
		<div class="yakuzemiplus-box">
			<h3><?php the_title(); ?><br><?php the_field('発行年'); ?> <?php the_field('発行時期'); ?></h3>
			<h4><a href="<?php the_field('目次pdf'); ?>">掲載内容 目次</a></h4>
			<p class="hideSP"><?php the_field('補足事項'); ?></p>
		</div>
			<p class="clear hidePC"><?php the_field('補足事項'); ?></p>
		</li>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</ul>
		</section>

<?php else : ?>
		<section class="mb50">
		<h2 class="sec-title">BACK NUMBERS</h2>
		<ul class="yakuzemiplus-list">
		<?php
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$loop = new WP_Query(array(
			'paged' => $paged,
			'post_type' => 'yakuzemiplus',
			'posts_per_page' => 10,
			'post__not_in'=> array(get_the_ID()), //現在表示している投稿を除外
			));
			if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
		?>
		<li class="clearfix">
		<div class="yakuzemiplus-image ">
			<img src="<?php the_field('表紙画像'); ?>" alt="<?php the_title(); ?>" />
		</div>
		<div class="yakuzemiplus-box">
			<h3><?php the_title(); ?><br><?php the_field('発行年'); ?> <?php the_field('発行時期'); ?></h3>
			<h4><a href="<?php the_field('目次pdf'); ?>">掲載内容 目次</a></h4>
			<p class="hideSP"><?php the_field('補足事項'); ?></p>
		</div>
			<p class="clear hidePC"><?php the_field('補足事項'); ?></p>
		</li>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</ul>
		</section>
<?php endif; ?>
	</article>

	<div class="pagination"><?php wp_pagination(); ?></div>

	</div><!-- left-contents -->

	<?php get_sidebar( ); ?>

</div><!-- page-contents -->

<?php get_footer(); ?>