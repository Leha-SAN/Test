<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Contacts */

$this->title = 'Update Contacts: ' . $model->contact_id;
?>
<div class="contacts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
