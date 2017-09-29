<?php
namespace hrupin\base\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

class CensureController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Reviews models.
     * @return mixed
     */
    public function actionIndex()
    {
//        $class = Yii::$app->getModule('base')->modelMap['Base'];
//        $model = Yii::createObject($class::className());

        return $this->render('index');
    }
}