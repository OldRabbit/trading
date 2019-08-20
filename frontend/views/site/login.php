<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Вход');
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="login-box Login inner">
      <div class="login-box-body Login__body">
        <h2><?= Yii::t('app', 'Вход') ?></h2>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true])->label(false)->textInput(['placeholder' => Yii::t('app', 'Введите ваш логин')]) ?>

                <?= $form->field($model, 'password')->passwordInput()->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Вход'), ['class' => 'btn btn-info btn-login', 'name' => 'login-button']) ?>
                </div>

                <a href="/signup" class="text-center"><?= Yii::t('app', 'У вас нет аккаунта? Регистрация') ?></a>

            <?php ActiveForm::end(); ?>

      </div>
</div>
