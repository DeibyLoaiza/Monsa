<?php
namespace app\models;
use Yii;
use yii\db\ActiveRecord;
class Cotizantes extends ActiveRecord
{    /*
     * Metodo que permite realizar la conexión con la base de datos
     */
    public static function getDb()
    {
        return Yii::$app->db;
    }
    
    /*
     * Metodo que permite conectar la tabla de la base de datos
     */
    public static function tableName()
    {   //Se incluye el nombre de la tabla
        return 'cotizantes';
    }
}
