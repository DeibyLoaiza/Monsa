<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<h1>Datos Cotizante</h1>
<?=Html::beginForm
        (
            Url::toRoute("site/peticion"), //action
            "get",//metodo
            ['class'=>'form-inline']//opciones
        );
?>

<div class="form-group">
    <?=    Html::label("Ingresa tu nombre","nombre") ?>
    <?=    Html::textInput("nombre", null, ["class"=>"form-control"]) ?>
    <?=    Html::label("Ingresa tu apellido","apellido") ?>
    <?=    Html::textInput("apellido", null, ["class"=>"form-control"]) ?>
    <?=    Html::label("Ingresa tu correo electrónico","correo") ?>
    <?=    Html::textInput("correo", null, ["class"=>"form-control"]) ?>
    <?=    Html::label("Selecciona modo de contacto","contacto") ?>   
    <select name="contacto">
        <option value="">Seleccionar</option>
        <option>Telefono fijo</option>
        <option>Telefono celular</option>
        <option>Facebook</option>
        <option>Acordar una cita</option>
    </select>
    
</div>


<?= Html::endForm() ?>


