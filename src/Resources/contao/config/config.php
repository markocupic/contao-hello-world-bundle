<?php

/*
 * This file is part of Contao Hello World Bundle.
 * 
 * (c) Marko Cupic 2020 <m.cupic@gmx.ch>
 * @license MIT
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/contao-hello-world-bundle
 */

use Markocupic\ContaoHelloWorldBundle\Model\HelloWorldModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['hello_world_modules']['hello_world'] = array(
    'tables' => array('tl_hello_world')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_hello_world'] = HelloWorldModel::class;
