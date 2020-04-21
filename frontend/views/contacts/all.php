<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $contacts common\models\Contacts */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-index">

    <h1><?= Html::encode($this->title) ?></h1>
     <?php Pjax::begin(); 
     if (!(Yii::$app->user->isGuest)) { ?>
       <div class="body-content">

               <div class="row">
               <p>
                    <?= Html::a('Создать новый контакт', ['create'], ['class' => 'btn btn-success']) ?>
               </p>
               <br>
        
                   <?php foreach ($contacts as $one) {
                      if  ($one->contact_user == Yii::$app->user->getId()) {?>
                   <div class="col-lg-12">
                       <h2><span><?= $one->contact_name ?> <?= $one->contact_surname ?> <?= \yii\bootstrap\Html::a('Смотреть', ['contacts/one', 'url'=>$one->contact_id]) ?></span></h2>
                   </div>
                   <?php }} ?>
               </div>

       </div>    
    <?php } Pjax::end(); ?>
</div>
