<?php
namespace hrupin\censure\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

class ParseController extends Controller
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
     * Lists all Censure action.
     * @return mixed
     */
    public function actionIndex()
    {
        $class = Yii::$app->getModule('censure')->modelMap['Censure'];
        $model = Yii::createObject($class::className());

        if(Yii::$app->request->post()){
            $res = $model::parse(Yii::$app->request->post('text'), '6', '', true, Yii::$app->getModule('censure')->replace);
            echo $res;
        }
    }
}