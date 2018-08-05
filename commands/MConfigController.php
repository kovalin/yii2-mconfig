<?php
/**
 * @author Kovalin Anton <9820498@gmail.com>
 */

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;
use app\modules\mconfig\models\Config;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MConfigController extends Controller
{

    public function actionIndex() {
        $items = Config::find()->all();
        foreach ($items as $item){
            if ($item->param) {
                echo $item->param .': '. $item->val;
                echo "\r\n";
            }
        }

        return ExitCode::OK;
    }
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionGet($key)
    {
        $model = Config::find()->where(['param' => $key])->one();

        if (!$model) {
            echo 'Not found!';
        } else {
            echo $model->val;

        }

        return ExitCode::OK;
    }

    public function actionAdd($key, $val, $default = '', $label ='', $type = '')
    {
        $config = new Config();

        $config->param = $key;
        $config->val = $val;
        $config->default = $default;
        $config->label = $label;
        $config->type = $type;

        $config->save(false);



        return ExitCode::OK;
    }

    /**
     * @param $key
     * @return ints
     */
    public function actionDelete($key)
    {
        $config = Config::find()->where(['param' => $key])->one();
        $config->delete();

        echo 'Ok';

        return ExitCode::OK;
    }

}
