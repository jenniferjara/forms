<?php
/**
 * This file is part of Vegas package
 *
 * @author Radosław Fąfara <radek@archdevil.pl>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://bitbucket.org/amsdard/vegas-phalcon
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vegas\Forms\DataProvider\Exception;

use \Vegas\Forms\DataProvider\Exception as DataProviderException;

/**
 *
 * @package Vegas\Forms\Exception
 */
class NotFoundException extends DataProviderException
{
    protected $message = 'Input data provider not found';
}