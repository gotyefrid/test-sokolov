<?php

namespace frontend\services;

use Exception;
use common\adds\CityList;

class Funcs
{    
    /**
     * addToFavorite
     *
     * @param  object $session 
     * @param  array $wishArticlesArr
     * @param  int $articleId
     * @return void
     */
    public static function addToFavorite($session, $wishItemArr, $itemId)
    {
        if (is_array($wishItemArr)) {
            if (in_array($itemId, $wishItemArr)) {
                $session->setFlash('danger', 'Alredy exist!');
            } else {
                array_push($wishItemArr, $itemId);
                $session->set('wishListItem', $wishItemArr);
                $session->setFlash('success', 'Added!');
            }
        } else {
            $session->set('wishListItem', [$itemId]);
        }
    }
    
    /**
     * setSessionCity - create/update variable 'city' in session
     *
     * @param  string $city
     * @param  object $session
     * @return void
     */
    public static function setSessionCity($city, $session)
    {
        if (!array_key_exists($city, CityList::$list)) {
            throw new Exception("City not found");
        } else {
            $cityName = CityList::$list[$city];
            $session->set('city', $city);
            $session->set('cityName', $cityName);
        }
    }
    
    /**
     * Delete item from array and set new array into session
     *
     * @param  int $articleId - value to delete
     * @param  array $arr
     * @param  object $session
     * @return void
     */
    public static function deleteFavoriteFromArray($itemId, $arr, $session)
    {
        if (is_array($arr)) {
            $arr = array_flip($arr);
            unset($arr[$itemId]);
            $arr = array_flip($arr);
            $session->set('wishListItem', $arr);
        }
    }
}
