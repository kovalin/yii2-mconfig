<?php
/**
 * @author Anton Kovalin <9820498@gmail.com>
 */

namespace app\modules\mconfig\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property string $id
 * @property string $param
 * @property string $val
 * @property string $default
 * @property string $label
 * @property string $type
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mconfig';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['param', 'val'], 'required'],
            [['val', 'default'], 'string'],
            [['param', 'type'], 'string', 'max' => 128],
            [['label'], 'string', 'max' => 255],
            [['param'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'param' => 'Param',
            'val' => 'Value',
            'default' => 'Default',
            'label' => 'Label',
            'type' => 'Type',
        ];
    }
}
