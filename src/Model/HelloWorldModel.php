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

declare(strict_types=1);

namespace Markocupic\ContaoHelloWorldBundle\Model;

use Contao\Model;

/**
 * Class HelloWorldModel
 *
 * @package Markocupic\ContaoHelloWorldBundle\Model
 */
class HelloWorldModel extends Model
{
    protected static $strTable = 'tl_hello_world';

}

