<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php include_once('MainPage\head.ctp'); ?>
</head>
<body class="blog wp-custom-logo left-logo-right-menu acme-animate right-sidebar absolute hfeed">
        <div class="site" id="page">
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <?php include_once('MainPage\mainmenu.ctp'); ?>

			<!-- ====== Change Content  ====== -->

            <?= $this->fetch('content') ?>

			<!-- ====== Change Content  ====== -->

            <div class="clearfix"></div>

            <?php include_once('MainPage\footer.ctp'); ?>

        </div><!-- #page -->
        <script type='text/javascript'>
                /* <![CDATA[ */
                var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.acmethemes.com\/construction-field-pro\/wp-json\/contact-form-7\/v1", "namespace":"contact-form-7\/v1"}};
                /* ]]> */
        </script>

        <script type='text/javascript'>
            /* <![CDATA[ */
            var construction_field_ajax = {"ajaxurl":"http:\/\/demo.acmethemes.com\/construction-field-pro\/wp-admin\/admin-ajax.php"};
            /* ]]> */
        </script>
    </body>
</html>
