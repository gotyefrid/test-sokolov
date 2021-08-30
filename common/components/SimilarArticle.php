<?php

namespace common\components;

use yii\base\Widget;
use common\models\Item;


class SimilarArticle extends Widget
{
    public $data;
    
    /**
     * init
     *
     * @return void
     */
    public function init()
    {
        parent::init();
    }
    
    /**
     * run
     *
     * @return void
     */
    public function run()
    {
        $model = Item::find()->where(['!=', 'id', (int)$_GET['id']])->limit(2)->all();

        return $this->render('similarart', compact('model'));
    }
}
