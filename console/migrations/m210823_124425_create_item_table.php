<?php

use yii\db\Migration;

/**
 * Handles the creation of table `item`.
 */
class m210823_124425_create_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('item', [
            'id' => $this->primaryKey()->comment('ID'),
            'title' => $this->string()->notNull()->comment('Title of item'),
            'material' => $this->string(32)->comment('Material'),
            'mstandart' => $this->string(32)->comment('Material standart'),
            'insert' => $this->string(32)->defaultValue('Без вставки')->comment('Insert material'),
            'color' => $this->string(32)->comment('Color'),
            'sex' => $this->string(12)->defaultValue('Для женщин')->comment('Sex'),
            'price' => $this->string()->comment('Item price'),
            'content' => $this->text()->comment('Content of item'),
            'city' => $this->string(10)->comment('City lettering'),
            'img' => $this->text()->comment('Image URL'),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->comment('Date and time of creation'),
        ]);
        $this->insert('item', [
            'title' => 'Кольцо 1',
            'material' => 'Золото',
            'mstandart' => '585',
            'insert' => 'Гранат',
            'color' => 'Желтый',
            'price' => '43000',
            'content' => 'Описание золотого кольца 585 пробы',
            'city' => 'msk',
            'img' => 'https://picsum.photos/200/300',
        ]);
        $this->insert('item', [
            'title' => 'Серьги 2',
            'material' => 'Серебро',
            'mstandart' => '975',
            'color' => 'Белый',
            'price' => '4000',
            'content' => 'Серьги из серебра 975 пробы',
            'city' => 'msk',
            'img' => 'https://picsum.photos/200/300',
        ]);
        $this->insert('item', [
            'title' => 'Кольцо 3',
            'material' => 'Золото',
            'mstandart' => '585',
            'color' => 'Желтый',
            'sex' => 'Для мужчин',
            'price' => '13000',
            'content' => 'Описание золотого кольца 585 пробы',
            'city' => 'blg',
            'img' => 'https://picsum.photos/200/300',
        ]);
        $this->insert('item', [
            'title' => 'Кольцо 4',
            'material' => 'Золото',
            'mstandart' => '585',
            'insert' => 'Гранат',
            'color' => 'Желтый',
            'price' => '43000',
            'content' => 'Описание золотого кольца 585 пробы',
            'city' => 'msk',
            'img' => 'https://picsum.photos/200/300',
        ]);
        $this->insert('item', [
            'title' => 'Серьги 5',
            'material' => 'Серебро',
            'mstandart' => '975',
            'color' => 'Белый',
            'price' => '4000',
            'content' => 'Серьги из серебра 975 пробы',
            'city' => 'msk',
            'img' => 'https://picsum.photos/200/300',
        ]);
        $this->insert('item', [
            'title' => 'Кольцо 6',
            'material' => 'Золото',
            'mstandart' => '585',
            'color' => 'Желтый',
            'sex' => 'Для мужчин',
            'price' => '13000',
            'content' => 'Описание золотого кольца 585 пробы',
            'city' => 'blg',
            'img' => 'https://picsum.photos/200/300',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('item');
    }
}
