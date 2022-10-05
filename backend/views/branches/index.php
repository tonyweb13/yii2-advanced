<?php

use app\models\Branches;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BranchesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Branches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branches-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Branches', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'branch_id',
            'companies_company_id',
            'branch_name',
            'branch_address',
            'branch_create_date',
            //'branch_status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Branches $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'branch_id' => $model->branch_id]);
                 }
            ],
        ],
    ]); ?>


</div>
