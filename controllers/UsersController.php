<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\Users;
use yii\helpers\VarDumper;

class UsersController extends Controller
{
    public function actionIndex()
    {
        $users = Users::find()->all();
        if ($users){
            return $this->render('index', compact('users'));
        }
    }
}