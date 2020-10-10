<?php

declare(strict_types=1);

/*
 * This file is part of Contao Hello World Bundle.
 *
 * (c) Marko Cupic 2020 <m.cupic@gmx.ch>
 * @license MIT
 * @link https://github.com/markocupic/contao-hello-world-bundle
 *
 */

namespace Markocupic\ContaoHelloWorldBundle\Model;

use Contao\Model;

/**
 * Class HelloWorldModel.
 */
class HelloWorldModel extends Model
{
    protected static $strTable = 'tl_hello_world';
}
