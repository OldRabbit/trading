<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Регистрация');
?>

    <div class="login-box Login inner">
      <div class="login-box-body Login__body">
        <h2><?= Yii::t('app', 'Регистрация') ?></h2>

        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->label(false)->textInput(['placeholder' => Yii::t('app', 'Введите ваш логин')]) ?>

            <?= $form->field($model, 'phone')->label(false)->textInput(['placeholder' => Yii::t('app', 'Введите ваш телефон')]) ?>

            <?= $form->field($model, 'email')->label(false)->textInput(['placeholder' => Yii::t('app', 'Введите вашу почту')]) ?>

            <?= $form->field($model, 'password')->passwordInput()->label(false)->textInput(['placeholder' => Yii::t('app', 'Введите ваш  пароль')]) ?>

            <?= $form->field($model, 'password_repeat')->passwordInput()->label(false)->textInput(['placeholder' => Yii::t('app', 'Повторите пароль')]) ?>
            
          <div class="row">
            <div class="col-xs-12">
                <?= Html::submitButton(Yii::t('app', 'Регистрация'), ['class' => 'btn btn-info btn-login', 'name' => 'signup-button']) ?>
            </div>
          </div>
          <?php ActiveForm::end(); ?>

        <a href="/login" class="text-center"><?= Yii::t('app', 'У меня уже есть аккаунт. Войти') ?></a>

      </div>
</div>

