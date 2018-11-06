<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach($post as $article):?>
                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"></a>

                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6></a></h6>

                                <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title?></a></h1>
                                <?= $article->getDate();?></span><ul class="text-center pull-right"></ul>

                            </header>
                            <b>Content:</b>
                            <div class="entry-content">
                                <p><?= $article->content?><?php

                                    ?>
                                <div class="main-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <?php foreach ($post as $article):?>
                                                    <article class="post">
                                                        <div class="post-thumb">


                                                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                                                <div class="text-uppercase text-center">View Post</div>
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                            <header class="entity-header text-center text-uppercase ">

                                                                <div class="entry-title"><?=$article->title ?></div>
                                                            </header>

                                                            <div class="social-share">
                                                                <span class="social-share-title pull-left text-capitalize">By </span>
                                                                <span class="social-share-title pull-left text-capitalize">  <span class="p-date"><?=$article->getDate() ?> </span><br> </span>
                                                                <ul class="text-center pull-right">


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </article>
                                                <?php endforeach; ?>
                                                <?php


                                                ?>

                                            </div>
                                            <div class="col-md-4" data-sticky_column="">
                                                <aside class="widget">

                                                </aside>
                                                <aside class="widget">
                                                    <b>Посдедние посты:</b>

                                                </aside>
                                                <aside class="widget border pos-padding">
                                                    <b>Популярные категории:</b>

                                                </aside>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="more-link">Detail</a>
                                </div>
                            </div>

                        </div>
                    </article>
                <?php endforeach; ?>

                <?php

                ?>
            </div>


        </div>
    </div>
</div>
<!-- end main content-->
<!--footer start-->