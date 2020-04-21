<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $contact_id
 * @property string $contact_name
 * @property string $contact_surname
 * @property int $contact_user
 * @property array $all_phones
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {   
              return [
            [['contact_name', 'contact_surname', 'contact_user'], 'required'],
            [['contact_user'], 'integer'],
            [['all_phones'], 'safe'],
            [['contact_name'], 'string', 'max' => 100],
            [['contact_surname'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'contact_name' => 'Contact Name',
            'contact_surname' => 'Contact Surname',
            'contact_user' => 'Contact User',
            'all_phones' => 'All Phones',
        ];
    }
}
