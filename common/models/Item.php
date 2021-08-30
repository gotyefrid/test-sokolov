<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id ID
 * @property string $title Title of item
 * @property string|null $material Material
 * @property string|null $mstandart Material standart
 * @property string|null $insert Insert material
 * @property string|null $color Color
 * @property string|null $sex Sex
 * @property string|null $price Item price
 * @property string|null $content Content of item
 * @property string|null $city City lettering
 * @property string|null $img Image URL
 * @property string|null $created_at Date and time of creation
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content', 'img'], 'string'],
            [['created_at'], 'safe'],
            [['title', 'price'], 'string', 'max' => 255],
            [['material', 'mstandart', 'insert', 'color'], 'string', 'max' => 32],
            [['sex'], 'string', 'max' => 12],
            [['city'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'material' => 'Material',
            'mstandart' => 'Mstandart',
            'insert' => 'Insert',
            'color' => 'Color',
            'sex' => 'Sex',
            'price' => 'Price',
            'content' => 'Content',
            'city' => 'City',
            'img' => 'Img',
            'created_at' => 'Created At',
        ];
    }
}
