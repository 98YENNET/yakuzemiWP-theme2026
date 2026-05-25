<!-- 404 -->
<?php get_header(); ?>

<div class="page-contents">

    <div class="left-contents">
        <article class="post">
            <h1 class="page-title">ページが見つかりません</h1>
            <p>お探しのページは見つかりませんでした。<br>
                以下のような原因が考えられます。</p>
            <ul class="description-list">
                <li>ページが削除された</li>
                <li>URLが間違っている</li>
            </ul>
            <p>お手数ですが、<a href="<?php echo esc_url(home_url('/')); ?>">トップページへお戻りください。</a></p>
        </article>
    </div><!-- left-contents -->

    <?php get_sidebar(); ?>

</div><!-- page-contents -->

<?php get_footer(); ?>