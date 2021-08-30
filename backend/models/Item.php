<?php

namespace backend\models;

use common\models\Item as ItemBase;

class Item extends ItemBase
{
    public function fields()
    {
        return [
            'id',
            'title'
        ];
    }
}
