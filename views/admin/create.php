<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\admin_post */

$this->title = 'Create Admin Post';
$this->params['breadcrumbs'][] = ['label' => 'Admin Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'class' => 'contact-form',
    ]) ?>

</div>
