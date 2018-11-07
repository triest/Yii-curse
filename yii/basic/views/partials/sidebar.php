<?php
use yii\helpers\Url;
?>
<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">

        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Облако тегов</h3>

          <?   $tags=$this->context->getPoluparTags(); ?>
            <?php foreach($tags as $tag):?>
                <a href="<?= Url::toRoute(['site/tag', 'tag'=>$tag->name]);?>"> <?= $tag->name ?> </a>
            <?php endforeach; ?>

        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Categories</h3>
            <ul>


            </ul>
        </aside>
    </div>
</div>