<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<h1> Registre sus datos para su cotizaci&oacute;n</h1>
<h3><?= $msg ?> </h3>
<?php $form = ActiveForm::begin([
   "method" => "post",
    "id" => "formulario",
    'enableClientValidation' => true,
    "enableAjaxValidation" => false,
]);
?>
<div class="row">
<div class="col-lg-5">
    <?= $form->field($model,"nombre")->input("text") ?>
    <?= $form->field($model,"apellido")->input("text") ?>
    <?= $form->field($model, "email")->input("email") ?>  
    <?= Html::submitButton("Enviar", ["class" => "btn btn-primary"]) ?>
</div> 
    
<?php $form->end() ?>
</div>
<a href="<?= Url::toRoute("site/index") ?> "> Ver m&aacute;s dise&ntilde;os</a>