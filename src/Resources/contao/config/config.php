<?php

/**
 * This file is part of a markocupic Contao Bundle.
 *
 * (c) Marko Cupic 2020 <m.cupic@gmx.ch>
 * @author     Marko Cupic
 * @package    Contao Hello World Bundle
 * @license    MIT
 * @see        https://github.com/markocupic/contao-hello-world-bundle
 *
 */

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['hello_world_modules']['hello_world'] = array(
'tables' => ['tl_hello_world']
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_hello_world'] = \Markocupic\ContaoHelloWorldBundle\Model\HelloWorldModel::class;
