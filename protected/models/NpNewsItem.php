<?php
/**
 * "@property interger $newsId
 * @property string $title
 * @property string $text 
 * @property string $publishDate 
 */

class NpNewsItem extends CActiveRecord
{
    
    const DEFAULT_CUT_LENGTH = 100;
    const DEFAULT_DATE_FORMAT = 'H:i:s d.m.Y';
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'np_news_item';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('publish_date', 'length', 'max'=>30),
            array('title', 'length', 'max'=>50),
            array('text', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('itemId, publish_date, title, text', 'safe', 'on'=>'search'),
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
            'itemId' => 'Item',
            'publish_date' => 'Publish Date',
            'title' => 'Title',
            'text' => 'Text',
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

        $criteria->compare('itemId',$this->itemId);
        $criteria->compare('publish_date',$this->publish_date,true);
        $criteria->compare('title',$this->title,true);
        $criteria->compare('text',$this->text,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return NpNewsItem the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    
     /**
     * Обрезает новость для списка новостей
     * @param string $text
     * @param integer $cut_length
     * @return string
     */
    public function shotText($cut_length = self::DEFAULT_CUT_LENGTH) {
        $arText = explode('.', $this->text, 3);
        $str = $arText[0];
        if(isset($arText[1])) {
            $str .= '. ' . $arText[1] . '.';
        }

        if( mb_strlen($str, 'UTF-8') < $cut_length ){
            return $str;
        } else {
            return mb_substr($str, 0, $cut_length,  'UTF-8') . ' ...';
        }
    }
    
    
    public function formatPublishDate( $format = self::DEFAULT_DATE_FORMAT){
        $timestamp = strtotime($this->publishDate);
        $formatedDate = date($format, $timestamp);
        return $formatedDate;
    }
} 