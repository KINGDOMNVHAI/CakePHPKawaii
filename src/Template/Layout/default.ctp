<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?=
        $this->Html->script([
        '/SitePage/wp-includes/css/dist/block-library/style.mince52.css?ver=5.0.2',
        '/SitePage/wp-content/plugins/contact-form-7/includes/css/styles3c21.css?ver=5.1.1',
        '/SitePage/wp-content/themes/construction-field-pro/assets/library/bootstrap/css/bootstrap.mine485.css?ver=3.3.6',
        '/SitePage/wp-content/themes/construction-field-pro/assets/library/Font-Awesome/css/font-awesome.min268f.css?ver=4.5.0',
        '/SitePage/wp-content/themes/construction-field-pro/assets/library/slick/slick3ba1.css?ver=1.3.3',
        '/SitePage/wp-content/themes/construction-field-pro/assets/library/magnific-popup/magnific-popupf488.css?ver=1.1.0',
        '/SitePage/wp-content/themes/construction-field-pro/stylece52.css?ver=5.0.2',
        ], ['block' => 'scriptBottom']);
    ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    <?= $this->fetch('scriptBottom') ?>
    </footer>
</body>
</html>
