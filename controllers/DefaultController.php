<?php
/**
 * @author Anton Kovalin <9820498@gmail.com>
 */

namespace app\modules\mconfig\controllers;

use yii\web\Controller;

/**
 * Default controller for the `mconfig` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
