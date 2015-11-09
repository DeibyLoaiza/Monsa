<?php
namespace app\models;
use Yii;
use yii\base\model;

class Registro extends model
{
    public $nombre;
    public $apellido;
    public $email;
    
    public function rules()
    {
        return 
        [
        ['nombre','required', 'message' => 'Campo requerido'], 
        ['nombre','match', 'pattern' => "/^.{4,30}$/" , 'message' => 'Mínimo 4 y máximo 30 caracteres'],
        ['nombre','match', 'pattern' => "/^[a-z]+$/i" , 'message' => 'Solo se aceptan letras'],
        ['apellido','required', 'message' => 'Campo requerido'], 
        ['apellido','match', 'pattern' => "/^.{4,30}$/" , 'message' => 'Mínimo 4 y máximo 30 caracteres'],
        ['apellido','match', 'pattern' => "/^[a-z]+$/i" , 'message' => 'Solo se aceptan letras'],
        ['email','required', 'message' => 'Campo requerido'], 
        ['email','match', 'pattern' => "/^.{11,50}$/" , 'message' => 'Mínimo 11 y máximo 50 caracteres'],
        ['email','email', 'message' => 'Formato no válido'],
        ['email','email_exite'],                
        ];
    }
    
    public function atributeLabels()
    {
    return
    [
        'nombre'=> 'Nombre:',
        'apellido'=> 'Apellido',
        'email'=> 'Email',
    ];
    }
    
    public function email_exite($attribute, $params)
    {   //Lista de correos de la base de datos
        $email = ["deiby_r10@hotmail.com", "dfloaiza10@gmail.com","deiby@hotmail.com", "loaiza10@gmail.com"];
        foreach ($email as $val)
        {
            if ($this -> email == $val)
            {
                $this->addError($attribute, "El mail ingresado ya exite");
                return true;
            }           
        }
        return false;
    }
}