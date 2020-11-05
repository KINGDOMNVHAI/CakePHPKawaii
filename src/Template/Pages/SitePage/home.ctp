<!--.image slider wrapper-->
<aside id="construction_field_about-3" class="widget widget_construction_field_about">
    <section id="construction_field_about-3" class="at-widgets acme-abouts ">
        <div class="container">
            <div class='at-widget-title-wrapper'>
                <h2 class="widget-title init-animate zoomIn"><span>Giới thiệu</span></h2>
                <p class="at-subtitle">Kawaiicode là blog về lập trình của KINGDOM NVHAI thiết kế và quản lý</p>
            </div>
            <div class="row featured-entries-col featured-entries-logo column">
                <div class="single-list col-sm-12 col-md-4 column">
                    <div class="single-item init-animate zoomIn">
                        <div class="icon clearfix">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <h3 class="title"> Nội dung </h3>
                        <div class="content">
                            <div class="details">
                                <p>Hướng dẫn lập trình, làm demo và download sản phẩm của Kawaiicode tự làm.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-list col-sm-12 col-md-4 column">
                    <div class="single-item init-animate zoomIn">
                        <div class="icon clearfix">
                            <i class="fa fa-crosshairs"></i>
                        </div>
                        <h3 class="title"> Mục tiêu </h3>
                        <div class="content">
                            <div class="details">
                                <p>Hướng dẫn mọi người, đặc biệt là các bạn sinh viên mới tất cả kinh nghiệm, kiến thức của Kawaiicode có được.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-list col-sm-12 col-md-4 column">
                    <div class="single-item init-animate zoomIn">
                        <div class="icon clearfix">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <h3 class="title"> Chuyên môn </h3>
                        <div class="content">
                            <div class="details">
                                <p>Kawaiicode chuyên về lập trình web PHP, JavaScript, Java. Ngoài ra còn có hứng thú với designer và SEO.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row-->
            <!-- <div class="row">
                <div class="at-btn-wrap at-view-all-widget">
                    <a href="#" class="init-animate zoomIn btn btn-primary outline-outward banner-btn"
                        target="_blank">My Profile.
                    </a>
                </div>
            </div> -->
        </div>
        <!--cointainer-->
    </section>
</aside>

<aside id="construction_field_posts_col-3" class="widget widget_construction_field_posts_col">
	<section id="construction_field_posts_col-3" class="at-widgets acme-col-posts ">
		<div class="container">
			<div class='at-widget-title-wrapper'>
				<div class='at-cat-color-wrap-9'>
					<h2 class="widget-title init-animate zoomIn"><span>Bài viết mới nhất</span></h2>
				</div>
			</div>
			<div class="featured-entries-col column">

				<?php foreach ($results as $result): ?>

				<!--dynamic css-->
				<div class="single-list col-sm-12 col-md-4" style="min-height:450px;">
					<article id="post-181"
						class="init-animate zoomIn post-181 post type-post status-publish format-standard has-post-thumbnail hentry category-blog">
						<div class="content-wrapper">
							<div class="image-wrap">
								<!--post thumbnail options-->
                                <a href="<?= $domains ?>post/<?= $result['post_url'] ?>">
                                    <div class="post-thumb">
                                        <img width="640" height="427"
                                            src="<?= $domains ?>SitePage/wp-content/uploads/2018/04/pexels-photo-914931-1024x683.jpg"
                                            class="attachment-large size-large wp-post-image" alt="<?= $result['post_title'] ?>"
                                            srcset="<?= $domains ?>SitePage/wp-content/uploads/2018/04/pexels-photo-914931-1024x683.jpg 1024w,
                                            <?= $domains ?>SitePage/wp-content/uploads/2018/04/pexels-photo-914931-1024x683.jpg 768w,
                                            <?= $domains ?>SitePage/wp-content/uploads/2018/04/pexels-photo-914931-1024x683.jpg 300w"
                                            sizes="(max-width: 640px) 100vw, 640px" />
                                    </div><!-- .post-thumb-->
                                </a>
							</div>
							<div class="entry-content">
								<div class="entry-header-title">
									<h3 class="entry-title"><?= $result['post_title'] ?></h3>
								</div>
								<div class="details"> <?= $result['post_present'] ?> </div>
							</div><!-- .entry-content -->
						</div>
					</article><!-- #post-## -->
				</div>
				<!--dynamic css-->

				<?php endforeach; ?>

			</div>
		</div>
	</section>
</aside>
