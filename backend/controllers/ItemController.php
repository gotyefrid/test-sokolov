<?php

namespace backend\controllers;

use backend\models\Item;

class ItemController extends BaseApiController
{
    public $modelClass = Item::class;
}
