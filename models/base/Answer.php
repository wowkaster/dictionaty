<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "answer".
 *
 * @property integer $answer_id
 * @property integer $session_id
 * @property integer $source_word_id
 * @property integer $source_lang_id
 * @property integer $selectable_word_id
 * @property integer $selectable_lang_id
 * @property integer $point
 * @property integer $result
 */
class Answer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['session_id', 'source_word_id', 'selected_word_id'], 'required'],
            [['session_id', 'source_word_id', 'selected_word_id', 'point', 'result'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'answer_id' => 'Answer ID',
            'session_id' => 'Session ID',
            'source_word_id' => 'Source Word ID',
            'selected_word_id' => 'Selectable Word ID',
            'point' => 'Point',
            'result' => 'Result',
        ];
    }
}
