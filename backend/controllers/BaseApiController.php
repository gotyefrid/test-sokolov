<?php

namespace backend\controllers;

use backend\models\Item;
use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\rest\Serializer;
use yii\web\Response;

class BaseApiController extends ActiveController
{
    /**
     * Проверяет права текущего пользователя.
     * Запускается перед тем как выдать данные. 
     * Любые правила для пользователя, которые запрашивает данные.
     *
     * @param  string $action ID действия, которое нужно выполнить
     * @param  object $model Модель, к которой нужно получить доступ. Если значение null, это означает, что доступ к конкретной модели не осуществляется.
     * @param  array $params Дополнительные параметры
     * @return void
     */
    public function checkAccess($action, $model = null, $params = [])
    {
        return true;
    }

    public function behaviors()
    {
        return [
            'contentNegotilator' => [
                'class' => ContentNegotiator::class,
                'formatParam' => '_format',
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                    'xml' => Response::FORMAT_XML,
                ],
            ],
        ];
    }
}
