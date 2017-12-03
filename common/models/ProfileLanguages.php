<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile_languages".
 *
 * @property integer $id
 * @property integer $user__id
 * @property integer $language_skill__id
 * @property double $desired_fee
 */
class ProfileLanguages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_languages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user__id'], 'required'],
            [['user__id', 'language_skill__id'], 'integer'],
            [['desired_fee'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user__id' => 'User  ID',
            'language_skill__id' => 'Language Skill  ID',
            'desired_fee' => 'Desired Fee',
        ];
    }
}
