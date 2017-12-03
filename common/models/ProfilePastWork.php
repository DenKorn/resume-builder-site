<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile_past_work".
 *
 * @property integer $id
 * @property integer $user__id
 * @property string $birthday
 * @property double $desired_fee
 */
class ProfilePastWork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_past_work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
