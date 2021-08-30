<?php

namespace frontend\models;

use Yii;
use common\models\Item as ItemBase;

class Item extends ItemBase
{
    /**
     * findAllArticlesOfCurrentCity
     *
     * @return object 
     */
    public static function findAllItemsOfCurrentCity()
    {
        return Item::find()
            ->where(['=', 'city', 'all'])
            ->orWhere(['=', 'city', Yii::$app->session->get('city')]);
    }

    /**
     * SearchQuery
     *
     * @param  string $searchStr - user search query
     * @return object 
     */
    public static function SearchQuery($searchStr)
    {
        return Item::find()
            ->andWhere([
                'AND',
                [
                    'OR',
                    ['like', 'title', $searchStr],
                    ['like', 'mstandart', $searchStr]
                ],
                [
                    'OR',
                    ['city' => Yii::$app->session->get('city')],
                    ['city' => 'all'],
                ],
            ]);
    }

    /**
     * findFavoriteArticles
     *
     * @param  mixed $arr Array with IDs of Articles 
     * @return object
     */
    public static function findFavoriteItems($arr)
    {
        return Item::find()
            ->where(['id' => $arr])
            ->all();
    }

    public function fields()
    {
        return [
            'id',
            'title',
        ];
    }
}
