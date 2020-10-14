<div id="content" class="site-content container clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php foreach ($results as $result): ?>

			<article id="post-188" class="post-188 post type-post status-publish format-standard has-post-thumbnail hentry category-blog">
				<div class="content-wrapper row">
					<!--post thumbnal options-->
					<div class="image-wrap col-md-4">
						<div class="post-thumb">
                            <a href="2018/04/24/industrial-building/index.html">
                                <img width="1920" height="1280"
                                src="<?= $domains ?>SitePage/wp-content/uploads/2018/04/glass-items-3339972_1920.jpg"
                                class="attachment-full size-full wp-post-image" alt=""
                                srcset="<?= $domains ?>SitePage/wp-content/uploads/2018/04/glass-items-3339972_1920.jpg 1920w,
                                <?= $domains ?>SitePage/wp-content/uploads/2018/04/glass-items-3339972_1920.jpg 300w,
                                <?= $domains ?>SitePage/wp-content/uploads/2018/04/glass-items-3339972_1920.jpg 768w
                                sizes="(max-width: 1920px) 100vw, 1920px" />
                            </a>
						</div><!-- .post-thumb-->
					</div>
					<div class="entry-content col-md-8">
						<header class="entry-header ">
							<div class="entry-meta">
                                <span class="cat-links"><a href="category/blog/index.html" rel="category tag">Blog</a></span>
                            </div><!-- .entry-meta -->
						</header><!-- .entry-header -->
						<div class="entry-header-title">
                            <h3 class="entry-title"><a href="2018/04/24/caring-for-construction/index.html" rel="bookmark"><?= $result['post_title'] ?></a></h3>
                        </div>
						<footer class="entry-footer">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            <span class="posted-on">
                                <a href="2018/04/24/caring-for-construction/index.html" rel="bookmark">
                                    <time class="entry-date published updated" datetime="2018-04-24T10:39:40+00:00"><?= $result['post_update_at'] ?></time>
                                </a>
                            </span>
                        </footer><!-- .entry-footer -->
						<p><?= $result['post_present'] ?>
                        <a href="2018/04/24/caring-for-construction/index.html" class="more-link btn btn-primary">Tiếp tục >></a></p>
					</div><!-- .entry-content -->
				</div>
            </article><!-- #post-## -->

            <?php endforeach; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php include_once('block\widget.ctp'); ?>
</div><!-- #content -->
