<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $contactone common\models\Contacts */

$this->title = $contactone->contact_id;

\yii\web\YiiAsset::register($this);
?>
<div class="body-content">
    <?php if (($contactone) && !(Yii::$app->user->isGuest)) {?>
      <h2><?=$contactone->contact_name ?> <?=$contactone->contact_surname ?></h2>
      <?php 
         $i = 1;
         foreach ($contactone->all_phones as $numbers) {
            if ($numbers) {
            ?> <div><?= $i ?>. <?= $numbers ?> <?php }
            $i++;
         }
            
      ?>
      <br>

      <br>
      <?= \yii\bootstrap\Html::a('Редактировать', ['update', 'id'=>$contactone->contact_id], ['class' => 'btn btn-primary']) ?>

      <br>      <br>      <br>
      
            <?= \yii\bootstrap\Html::a('Удалить', ['delete', 'id'=>$contactone->contact_id], ['class' => 'btn btn-danger']) ?>
      

    <?php } ?>
</div>

    
