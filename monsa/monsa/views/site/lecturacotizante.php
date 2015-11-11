<?php
use yii\helpers\Url;
?>

<a href="<?= Url::toRoute("site/registrocotizante") ?> "> Registrar cotizante</a>
<h3>Lista de correos</h3>
<table class="table table-bordered">
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Correo_electronico</th>
    </tr>
    <?php foreach($model as $row): ?>
    <tr>
        <td><?= $row->Nombres ?></td>
        <td><?= $row->Apellidos ?></td>
        <td><?= $row->Correo_electronico ?></td>
    </tr>
    <?php endforeach ?>
</table>