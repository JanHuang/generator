<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 16/5/5
 * Time: 下午10:38
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

include __DIR__ . '/../vendor/autoload.php';

$generator = new \FastD\Generator\Generator(new \Test\Test6());

echo $generator->output();