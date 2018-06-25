<?php
/**
 * @author Anton Kovalin <9820498@gmail.com>
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Config */

$this->title = 'Update Config: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="config-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
