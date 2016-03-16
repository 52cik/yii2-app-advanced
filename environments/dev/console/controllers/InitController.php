<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\models\User;

/**
 * 初始化控制器
 */
class InitController extends Controller
{

    /**
     * 默认动作
     */
    public function actionIndex()
    {
        echo "一些初始化操作...\n";
    }

    /**
     * 添加超级管理员
     */
    public function actionAdmin()
    {
        $model = new User();

        $model->username = 'admin';
        $model->password = '123123';
        $model->email = 'admin@admin.com';
        $model->generateAuthKey();

        echo $model->save() ? 'success!' : 'failed!';
        echo PHP_EOL;
    }

}
