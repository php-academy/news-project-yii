<?php


class RegisterForm extends CFormModel {
    
    public $login;
    public $password;
    public $repeatPassword;
    
    public $age;
    public $name;
    public $avatar;
    
    public function rules() {
       array(
           array('login', 'password', 'repeatPassword', 'required'),
           array('repeatPassword', 'compare', 'compareAttribute' => 'password'),
           array('age', 'numerical', 'allowEmpty', 'integerOnly' =>true, 'min' => 1),
           array('avatar', 'file', 'allowEmpty' => true, 'type' => 'gif, png, jpg, jpeg'),
           array('name', 'safe') // при массовом присваивании это нужно - игнор это поле
       );
    }
    
    
}
