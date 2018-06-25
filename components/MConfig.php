<?php
/**
 * @author Kovalin Anton <9820498@gmail.com>
 */

namespace app\modules\mconfig\components;


use yii\web\NotFoundHttpException;
use yii\base\Component;
use app\models\Config;


class MConfig extends Component {

    protected $data = array();

    public function init()
    {
        $items = Config::find()->all();
        foreach ($items as $item){
            if ($item->param) {
                $this->data[$item->param] = $item->val === '' ? $item->default : $item->val;
            }
        }
        parent::init();
    }

    public function get($key)
    {
        if (array_key_exists($key, $this->data)){
            return $this->data[$key];
        } else {
            throw new NotFoundHttpException('Undefined parameter '.$key);
        }
    }

    public function set($key, $value)
    {
        //$model = Config::find()->where(['param'=>$key])->all();
        $model = Config::find()
            ->where(['param' => $key])
            ->one();
        if (!$model)
            throw new NotFoundHttpException('Undefined parameter '.$key);

        $this->data[$key] = $value;
        $model->val = $value;
        $model->save();
    }

}