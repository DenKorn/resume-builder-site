<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile_graduations".
 *
 * @property integer $id
 * @property integer $user__id
 * @property string $skill
 * @property integer $level
 */
class ProfileGraduations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_graduations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user__id', 'skill', 'level'], 'required'],
            [['user__id', 'level'], 'integer'],
            [['skill'], 'string', 'max' => 100],
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
            'skill' => 'Skill',
            'level' => 'Level',
        ];
    }
}
