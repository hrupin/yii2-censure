# yii2-censure

Определение наличия мата (нецензурных слов) в тексте, матотест

Алгоритм достаточно надёжен и быстр, в т.ч. на больших объёмах данных

Метод обнаружения мата основывается на корнях и предлогах русского языка, а не на словаре
Слова "лох", "хер", "залупа", "сука" матерными словами не считаются (см. словарь Даля)
Разработка ведётся с 2005 года

Согласно статье 20.1 КоАП РФ нецензурная брань в общественных местах (интернет — место общественное) расценивается как мелкое хулиганство, за что установлена административная ответственность — наложение штрафа в размере от пятисот до одной тысячи рублей или административный арест на срок до пятнадцати суток.

Project was exported and update to Yii2 from http://code.google.com/p/php-censure


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist hrupin/yii2-censure "*"
```

or add

```
"hrupin/yii2-censure": "*"
```

to the require section of your `composer.json` file.


## Configure

in common/config/main.php

```
'modules' => [
    'censure' => [
        'class' => 'hrupin\censure\Module',
        'replace' => '[цензура]'
    ]
]
```




## Использование

```
Url::toRoute('/censure/parse/index') -> url for ajax
```

```
$res = \hrupin\censure\models\Censure::parse('text', '6', '', true, '[censored]');
echo $res;
```