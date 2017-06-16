<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModelComment app\models\PostsSearch */
/* @var $dataProviderComment yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'post_id',
            'post_title',
            'post_description:ntext',
            'author_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<div class="comments-index">
    <?= GridView::widget([
        'dataProvider' => $dataProviderComment,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Title',
                'attribute' => 'comment_title',
                'encodeLabel' => true,
            ],
            [
                'label' => 'Description',
                'attribute' => 'comment_description',
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
