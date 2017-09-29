<?php
namespace hrupin\censure;

use Yii;
use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    const VERSION = '0.0.3';

    public $modelMap = [];
    public $userModel;
    public $replace = '[censored]';
    public $urlPrefix = 'censure';
    public $debug = false;
}