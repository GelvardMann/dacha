<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">
    <?= \yii\helpers\Html::a('Get RBAC', \yii\helpers\Url::to(['site/rbac']),
        ['class'=>'btn btn-lg btn-success']);?>
</div>
