<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $anotation
 * @property string $date
 * @property string $author
 */
class articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['name', 'text', 'anotation', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'anotation' => 'Anotation',
            'date' => 'Date',
            'author' => 'Author',
        ];
    }
}
