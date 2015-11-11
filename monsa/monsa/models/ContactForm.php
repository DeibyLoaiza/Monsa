<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            ['name','required', 'message' => 'Campo requerido'],
            ['name','match', 'pattern' => "/^.{4,30}$/" , 'message' => 'Mínimo 4 y máximo 30 caracteres'],
            ['name','match', 'pattern' => "/^[a-záéíóúñ\s]+$/i" , 'message' => 'Solo se aceptan letras'],
            ['subject','required', 'message' => 'Campo requerido'],
            ['subject','match', 'pattern' => "/^.{4,30}$/" , 'message' => 'Mínimo 4 y máximo 30 caracteres'],
            ['body','required', 'message' => 'Campo requerido'],
            ['email','required', 'message' => 'Campo requerido'],
                    
            // email has to be a valid email address
            ['email', 'email', 'message' => 'Formato no válido'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha', 'message' => 'El código de verificación es incorrecto'],
        ];
    }
    
    public function rules1()
 {
  return [
   ['id_alumno', 'integer', 'message' => 'Id incorrecto'],
   ['nombre', 'required', 'message' => 'Campo requerido'],
   ['nombre', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
   ['nombre', 'match', 'pattern' => '/^.{3,50}$/', 'message' => 'Mínimo 3 máximo 50 caracteres'],
   ['apellidos', 'required', 'message' => 'Campo requerido'],
   ['apellidos', 'match', 'pattern' => '/^[a-záéíóúñ\s]+$/i', 'message' => 'Sólo se aceptan letras'],
   ['apellidos', 'match', 'pattern' => '/^.{3,80}$/', 'message' => 'Mínimo 3 máximo 80 caracteres'],
   ['clase', 'required', 'message' => 'Campo requerido'],
   ['clase', 'integer', 'message' => 'Sólo números enteros'],
   ['nota_final', 'required', 'message' => 'Campo requerido'],
   ['nota_final', 'number', 'message' => 'Sólo números'],
  ];
 }


    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return 
        [
            'name'=> 'Nombre:',
            'subject'=> 'Asunto',
            'email'=> 'Email',
            'verifyCode' => 'Código de verificación',
            'body'=> 'Mensaje',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        $content = "<p>Email: " . $this->email . "</p>";
        $content .= "<p>Name: " . $this->name . "</p>";
        $content .= "<p>Subject: " . $this->subject . "</p>";
        $content .= "<p>Body: " . $this->body . "</p>";

        if ($this->validate()) {
            Yii::$app->mailer->compose("@app/mail/layouts/html", ["content" => $content])
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        } else {
            return false;
        }
    }
}
