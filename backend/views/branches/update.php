<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Branches $model */

$this->title = 'Update Branches: ' . $model->branch_id;
$this->params['breadcrumbs'][] = ['label' => 'Branches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->branch_id, 'url' => ['view', 'branch_id' => $model->branch_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="branches-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
