<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<h1>Exterior e Interior de casa Orquidea</h1>
<a href="<?= Url::toRoute("site/registrocotizante") ?> "> Cotizar esta casa</a>
<?=Html::beginForm
        (
            Url::toRoute("site/peticion"), //action
            "get",//metodo
            ['class'=>'form-inline']//opciones
        );
?>
<div>
    <div class="slider-wrapper">
                        <div class="slider">
                             <ul class="items">
                                 <h2>Sala de descanso</h2>
                                <li>
                                    <img src="images/interiorCasaOrquidea/sala1.jpg" alt="">
                                </li>
                               
                                <li>
                                    <img src="images/interiorCasaOrquidea/sala2.jpg" alt="">
                                </li>
                               
                                <li>
                                    <img src="images/interiorCasaOrquidea/salaConVista.jpg" alt="">
                                </li>
                               
                            </ul>
                         </div>
    </div>
</div>   
<?= Html::endForm() ?>
<h4><a href="<?= Url::toRoute("site/registrocotizante") ?> "> Cotizar esta casa</a></h4>