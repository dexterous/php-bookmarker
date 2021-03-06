<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$appName = 'Bookmarker';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $appName ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="header-title">
            <span><?= $this->Html->link($appName, '/') ?></span>
            <span class="sub-header"><?= $this->fetch('title') ?></span>
        </div>
        <div class="header-help">
        <?php if($this->get('user')['id']) { ?>
            <span><?= $this->Html->link(__('Profile'), ['controller' => 'users', 'action' => 'view', $user['id']]) ?></span>
            <span><?= $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout']) ?></span>
        <?php } else { ?>
            <span><?= $this->Html->link(__('Register'), ['controller' => 'users', 'action' => 'add']) ?></span>
        <?php } ?>
        <!--
            <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
            <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
        -->
        </div>
    </header>
    <div id="container">
        <?= $this->Flash->render('auth') ?>
        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>
