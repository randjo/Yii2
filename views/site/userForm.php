<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\VarDumper;

if (Yii::$app->session->hasFlash('success')) {
    echo '<div class="alert alert-success">';
    echo Yii::$app->session->getFlash('success');
    echo '</div>';
}

$form = ActiveForm::begin();
echo $form->field($model, 'name');
echo $form->field($model, 'email');
echo Html::submitButton('Submit', ['class'=>'btn btn-success']);
ActiveForm::end();
