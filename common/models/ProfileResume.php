<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile_resume".
 *
 * @property integer $id
 * @property integer $user__id
 * @property string $birthday
 * @property double $desired_fee
 */
class ProfileResume extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_resume';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user__id'], 'required'],
            [['user__id'], 'integer'],
            [['birthday'], 'safe'],
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
            'birthday' => 'Birthday',
            'desired_fee' => 'Desired Fee',
        ];
    }
}
