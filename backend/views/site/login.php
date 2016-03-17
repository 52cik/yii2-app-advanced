<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Login';
?>
<header class="text-center login-header clearfix">
    <h1>平台管理</h1>
    <!--<p>登录后即可管理您的平台</p>-->
</header>

<div class="wrap login-body clearfix">
    <div class="container">
        <div class="site-login">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => '请输入用户名']) ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => '请输入密码']) ?>

            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-xs-7 col-sm-7">{input}</div><div class="col-xs-4 col-sm-4">{image}</div></div>',
                'options' => ['class' => 'form-control', 'placeholder' => '请输入验证码'],
                'imageOptions' => ['alt' => '验证码', 'title' => '看不清? 点我换一张.', 'class' => 'img-thumbnail'],
            ]) ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton('登 录', ['class' => 'btn btn-primary btn-lg btn-block', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
