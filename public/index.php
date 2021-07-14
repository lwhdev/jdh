<?php

/**
 *
 * Name: PhpStorm
 * Date: 2021-07-12
 * Time: 10:09
 * Author: little thing
 */

use App\Controller\Goods;
use App\Models\Article;
use application\Validate\BaseValidate;
use Symfony\Component\VarDumper\VarDumper;

require_once  __DIR__.'/../vendor/autoload.php';
$data = [
    'name'=>'mr',
    'age'=>25,
];
$huan = new App\Models\User();
$huan->setId(25);
$huan->setName('李伟桓');

//$a = new Article();
//$a->setId(100);
//VarDumper::dump($a);

//$goods = new Goods();
//$goods->setId(1024);

$validate = new BaseValidate();
$validate->setId(1000);
VarDumper::dump($validate);
