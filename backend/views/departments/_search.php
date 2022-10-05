<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DepartmentsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="departments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'branches_branch_id') ?>

    <?= $form->field($model, 'department_name') ?>

    <?= $form->field($model, 'companies_company_id') ?>

    <?= $form->field($model, 'department_created_date') ?>

    <?php // echo $form->field($model, 'department_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
