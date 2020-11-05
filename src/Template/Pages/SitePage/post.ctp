<div id="content" class="site-content container clearfix">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <article id="post-113" class="init-animate post-113 page type-page status-publish has-post-thumbnail hentry">
                <div class="single-feat clearfix">
                    <!-- <figure class="single-thumb single-thumb-full">
                        <img width="1920" height="1280" src="../wp-content/uploads/2018/04/construction.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="http://demo.acmethemes.com/construction-field-pro/wp-content/uploads/2018/04/construction.jpg 1920w, http://demo.acmethemes.com/construction-field-pro/wp-content/uploads/2018/04/construction-300x200.jpg 300w, http://demo.acmethemes.com/construction-field-pro/wp-content/uploads/2018/04/construction-768x512.jpg 768w, http://demo.acmethemes.com/construction-field-pro/wp-content/uploads/2018/04/construction-1024x683.jpg 1024w" sizes="(max-width: 1920px) 100vw, 1920px" />
                    </figure> -->
                </div>
                <div class="content-wrapper">
                    <div class="entry-content">
                        <h3><?= $results->post_title ?></h3>

                        <b><?= $results->post_present ?></b>

                        <hr>

                        <?= $results->post_content ?>

                    </div><!-- .entry-content -->
                </div>
            </article><!-- #post-## -->
        </main><!-- #main -->
    </div><!-- #primary -->

    <?php include_once('block/widget.ctp'); ?>
</div><!-- #content -->
