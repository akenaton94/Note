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
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
    <?php if ($this->request->here == '/note/users/login') { ?>
<body style="background-color:#2489ca">
<?php }
    else { ?>
    <?php if ($this->request->here == '/note/users/login') {} else { ?>
      <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <?php if($loggedIn) : ?>
                    <li><?= $this->Html->link('Desconectarse', ['controller' => 'users', 'action' => 'logout']); ?></li>
                <?php else : ?>
                    <li><?= $this->Html->link('Registrarse', ['controller' => 'users', 'action' => 'register']); ?></li>
                <?php endif; ?>
            </ul>
        </section>
    </nav>
    <?php } }?>
    <?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
<footer></footer>
</body>
</html>
