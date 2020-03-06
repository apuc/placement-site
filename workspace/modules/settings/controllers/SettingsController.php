<?php


namespace workspace\modules\settings\controllers;


use core\App;
use core\Controller;
use core\Debug;
use workspace\models\Settings;

class SettingsController extends Controller
{
    protected function init()
    {
        $this->viewPath = '/modules/settings/views/';
        $this->layoutPath = App::$config['adminLayoutPath'];
    }

    public $viewPath = '/modules/settings/views/';

    public function actionIndex()
    {
        $model = Settings::all();

        $options = [
            'serial' => '#',
            'fields' => [
                [
                    'key' => 'Ключ',
                    'category' => [
                        'label' => 'Значение',
                        'value' => function($model) {
                            return $model->value;
                        }
                    ]
                ]
            ],
            'baseUri' => 'settings',
        ];
        return $this->render('settings/settings.tpl',
            ['h1' => 'Settings', 'model' => $model, 'options' => $options]);
    }

    public function actionStore()
    {

    }

    public function actionEdit($id)
    {
        return $this->render('settings/edit.tpl', ['h1' => 'Edit', 'id' => $id]);
    }

    public function actionDelete($id)
    {

    }

    public function actionView($id)
    {
        $model = Settings::where('id', $id)->first();

        $options = [
            'fields' => [
                'key' => 'key',
                'category' => [
                    'label' => 'value',
                    'value' => function($model) {
                        return $model->value;
                    }
                ]
            ],
        ];

        return $this->render('settings/view.tpl', ['h1' => 'View', 'id' => $id, 'model' => $model, 'options' => $options]);
    }
}