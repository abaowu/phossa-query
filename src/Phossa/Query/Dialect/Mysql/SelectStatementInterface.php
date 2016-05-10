<?php
/**
 * Phossa Project
 *
 * PHP version 5.4
 *
 * @category  Library
 * @package   Phossa\Query
 * @author    Hong Zhang <phossa@126.com>
 * @copyright 2015 phossa.com
 * @license   http://mit-license.org/ MIT License
 * @link      http://www.phossa.com/
 */
/*# declare(strict_types=1); */

namespace Phossa\Query\Dialect\Mysql;

use Phossa\Query\Clause\ForUpdateInterface;
use Phossa\Query\Dialect\Common\SelectStatementInterface as SelectInterface;

/**
 * SelectStatementInterface
 *
 * @package Phossa\Query
 * @author  Hong Zhang <phossa@126.com>
 * @see     \Phossa\Query\Dialect\Common\SelectStatementInterface
 * @see     ForUpdateInterface
 * @version 1.0.0
 * @since   1.0.0 added
 */
interface SelectStatementInterface extends SelectInterface, ForUpdateInterface
{
}
