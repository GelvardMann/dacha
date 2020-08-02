<?php


namespace common\modules\news;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules(
            [
                '<module:news>/<action:add|delete|update>' => 'news/default/<action>',
            ]
        );
    }
}