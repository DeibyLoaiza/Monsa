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

    <div class="col-lg-2">
    <?=    Html::label("Tu nombre","nombre") ?>
    <?=    Html::textInput("nombre", null, ["class"=>"form-control"]) ?>
    <?=    Html::label("Tu apellido","apellido") ?>
    <?=    Html::textInput("apellido", null, ["class"=>"form-control"]) ?>
    <?=    Html::label("Tu correo electrónico","correo") ?>
    <?=    Html::textInput("correo", null, ["class"=>"form-control"]) ?>
    <?=    Html::label("Contacto personalizado","contacto") ?>   
    <select name="contacto">
        <option value="">Seleccionar</option>
        <option>Telefono fijo</option>
        <option>Telefono celular</option>
        <option>Acordar una cita</option>
    </select>    
    <?= Html::submitButton("Registrarme", ["class"=> "btn btn-primary"]) ?>
        
       
    </div>
    
    

<?= Html::endForm() ?>


