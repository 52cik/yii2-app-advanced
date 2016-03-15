<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

/**
 * Init controller
 */
class InitController extends Controller
{

    public function actionIndex()
    {
        echo "一些初始化操作...\n";
    }
}
