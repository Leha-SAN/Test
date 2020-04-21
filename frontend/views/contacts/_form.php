<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form">

<?php function filter_characters($str) {
	return implode('', array_filter(str_split($str), function($digit) {
	    return ('+' === $digit || is_numeric($digit));
    }));
}?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contact_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_surname')->textInput(['maxlength' => true]) ?>
    
    <br><div>Введите номера</div> <br>
    
    <?= $form->field($model, 'all_phones[1]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[2]')->textInput()->label(false) ?>

    <?= $form->field($model, 'all_phones[3]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[4]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[5]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[6]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[7]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[8]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[9]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[10]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[11]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[12]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[13]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[14]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[15]')->textInput()->label(false) ?>
          
    <?= $form->field($model, 'all_phones[16]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[17]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[18]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[19]')->textInput()->label(false) ?>
    
    <?= $form->field($model, 'all_phones[20]')->textInput()->label(false) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
