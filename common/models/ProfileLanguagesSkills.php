<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile_languages_skills".
 *
 * @property integer $id
 * @property integer $language__id
 * @property string $skill_title
 * @property integer $skill_level
 */
class ProfileLanguagesSkills extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_languages_skills';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language__id'], 'required'],
            [['language__id', 'skill_level'], 'integer'],
            [['skill_title'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'language__id' => 'Language  ID',
            'skill_title' => 'Skill Title',
            'skill_level' => 'Skill Level',
        ];
    }
}
