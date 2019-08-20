<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="tab-body">
	
	<?php $form = ActiveForm::begin([
		'id' => 'request',
      	'layout' => 'horizontal',
		]); ?>

		<div class="request-radio">
			<?= $form->field($model, 'is_invest')->radioList([
					0 => Yii::t('app', 'Нет'), 
					1 => Yii::t('app', 'Да')
				]); 
			?>
			<span class="invest"><a href="#"><?= Yii::t('app', 'Как это узнать?') ?></a></span>
		</div>


	    <?= $form->field($model, 'name')->textInput(['placeholder' => Yii::t('app', 'Имя')]) ?>

	    <?= $form->field($model, 'surname')->textInput(['placeholder' => Yii::t('app', 'Фамилия')]) ?>

	    <?= $form->field($model, 'second_name')->textInput(['placeholder' => Yii::t('app', 'Отчество')]) ?>

	    <?= $form->field($model, 'company')->textInput(['placeholder' => Yii::t('app', 'Укажите компанию, при работе с которой произошла потеря денежных средств')]) ?>

	    <?= $form->field($model, 'date')->textInput(['placeholder' => Yii::t('app', 'Укажите сроки в которые происходило сотруднечиство с данной компанией')]) ?>

	    <?= $form->field($model, 'method')->textInput(['placeholder' => Yii::t('app', 'Каким образом происходил денежный перевод?')]) ?>

	    <?= $form->field($model, 'amount')->textInput(['placeholder' => Yii::t('app', 'Сумма инвестирования')]) ?>

	    <?= $form->field($model, 'lose')->label(false)->textInput(['placeholder' => Yii::t('app', 'Общая сумма утраты')]) ?>

	    <?= $form->field($model, 'comment')->textInput(['placeholder' => Yii::t('app', 'Здесь вы можете указать дополнительную информацию')]) ?>

	    <div class="form-group">
	        <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-success full-width', 'name' => 'login-button']) ?>
	    </div>

	<?php ActiveForm::end(); ?>
</div>