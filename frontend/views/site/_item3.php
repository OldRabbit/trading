<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

if(isset($model->duration) && $model->duration !== '/') {
	$date = explode('/', $model->duration);
	$model->duration1 = $date[0];
	$model->duration2 = $date[1];
}

?>

<div class="tab-body">
	
	<?php $form = ActiveForm::begin([
		'id' => 'profile',
      	'layout' => 'horizontal',
		]); ?>

	    
	    <?= $form->field($model, 'name')->textInput(['placeholder' => Yii::t('app', 'Имя')]) ?>

	    <?= $form->field($model, 'surname')->textInput(['placeholder' => Yii::t('app', 'Фамилия')]) ?>

	    <?= $form->field($model, 'second_name')->textInput(['placeholder' => Yii::t('app', 'Отчество')]) ?>

	    <?= $form->field($model, 'address')->textInput(['placeholder' => Yii::t('app', 'Улица, город, страна')]) ?>

	    <?= $form->field($model, 'passport')->textInput(['placeholder' => Yii::t('app', '11 22 3333333')]) ?>

	    <?= $form->field($model, 'inn')->textInput(['placeholder' => Yii::t('app', '7111111')]) ?>

	    <?= $form->field($model, 'card')->textInput(['placeholder' => Yii::t('app', '12345678901234')]) ?>

	    <div class="card-group">
	    	<?= $form->field($model, 'duration1')->textInput(['placeholder' => Yii::t('app', '12')]) ?>

	    	<?= $form->field($model, 'duration2')->textInput(['placeholder' => Yii::t('app', '12')])->label(false) ?>
	    </div>

	    <?= $form->field($model, 'cvv')->passwordInput(['placeholder' => Yii::t('app', '***')]) ?>


	    <div class="form-group">
	        <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-success full-width', 'name' => 'login-button']) ?>
	    </div>

	<?php ActiveForm::end(); ?>
</div>