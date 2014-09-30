<?php

/**
 * This is the model class for table "np_user".
 *
 * The followings are the available columns in table 'np_user':
 * @property integer $userld
 * @property string $login
 * @property string $password
 * @property string $role
 * @property string $salt
 */
class NpUser extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'np_user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('login, password, role', 'required'),
            array('login', 'length', 'max'=>30),
            array('password', 'length', 'max'=>32),
            array('role', 'length', 'max'=>20),
            array('salt', 'length', 'max'=>60),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('userld, login, password, role, salt', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'userld' => 'Userld',
            'login' => 'Login',
            'password' => 'Password',
            'role' => 'Role',
            'salt' => 'Salt',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('userld',$this->userld);
        $criteria->compare('login',$this->login,true);
        $criteria->compare('password',$this->password,true);
        $criteria->compare('role',$this->role,true);
        $criteria->compare('salt',$this->salt,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    
    public function getUserById(){
        
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return NpUser the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function profile($userId){
        NpUserProfile::model()->findByAttributes(array('userId' => $userId));
    }
} 