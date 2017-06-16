<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Posts;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */
/* @var $post app\models\Posts */

$this->title = $model->comment_title;
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->comment_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->comment_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'comment_id',
            'post_id',
            'comment_title',
            'comment_description:ntext',
        ],
    ]) ?>

</div>

<div class="post-view">
    <?= DetailView::widget([
        'model' => $post,
        'attributes' => [
            'post_title',
            'post_description:ntext',
        ],
    ]) ?>
</div>
