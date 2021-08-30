<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use frontend\models\Item;
use frontend\services\Funcs;

class HomeController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    /**
     * Default route, favorites page
     *
     * @return void
     */
    public function actionIndex()
    {
        $arr = Yii::$app->session->get("wishListItem");
        $items = Item::findFavoriteItems($arr);

        return $this->render('index', compact('items'));
    }

    /**
     * Change current city
     * @param string $city Short name of city
     */
    public function actionChangeCity($city)
    {
        $session = Yii::$app->session;
        Funcs::setSessionCity($city, $session);

        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->goHome());
    }

    /**
     * Delete item from Favorites list.
     *
     * @param  int $articleId
     * @return void
     */
    public function actionDeleteFromFavorites($itemId)
    {
        $session = Yii::$app->session;
        $arr = $session->get("wishListItem");
        Funcs::deleteFavoriteFromArray($itemId, $arr, $session);

        return $this->redirect(Url::to(['home/index']));
    }
}
