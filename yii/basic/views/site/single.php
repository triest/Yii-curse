<?php
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 05.11.2018
 * Time: 21:18
 */

use yii\helpers\Url;
?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">

                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h1 class="entry-title"><?= $post->title?></h1>
                            <div class="entry-content">
                                <b>By <?= $post->author->username?> On <?= $post->getDate();?></b>
                            </div>
                        </header>
                        <div class="entry-content">
                            <?= $post->content?>
                        </div>
                        <div class="social-share">

                            <a href="index">К списку постов</a>

                            <ul class="text-center pull-right">

                            </ul>
                        </div>
                        Теги:

                        <?php foreach($tags as $tag):?>

                            <?=$tag->name ?>
                        <?php endforeach; ?>

                    </div>
                </article>

        </div>
    </div>
</div>
<!-- end main content-->