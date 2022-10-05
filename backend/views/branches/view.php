<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Branches $model */

$this->title = $model->branch_id;
$this->params['breadcrumbs'][] = ['label' => 'Branches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="branches-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'branch_id' => $model->branch_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'branch_id' => $model->branch_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'branch_id',
            'companies_company_id',
            'branch_name',
            'branch_address',
            'branch_create_date',
            'branch_status',
        ],
    ]) ?>

</div>
