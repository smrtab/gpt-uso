<?php

/* @var $this yii\web\View */

/**
 * @var $model Position
 * @var $provider ActiveDataProvider
 */

use app\models\Position;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Спиок работников';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать нового', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?= GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
    [
        'class' => SerialColumn::class,
        'header' => 'Порядковый номер',
    ],
    'id',
    'last_name',
    'first_name',
    'third_name',
    'telny_number',
    [
        'label' => 'Должность',
        'attribute' => 'position_id',
        'value' => function (User $model) {
            return $model->position->title;
        }
    ],
    'date_birth:date',
    'date_receipt:date',
    'status',
    [
        'class' => ActionColumn::class,
        'header' => 'Операции',
    ],
    ],
])?>
</div>
