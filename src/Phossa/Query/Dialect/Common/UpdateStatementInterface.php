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

namespace Phossa\Query\Dialect\Common;

use Phossa\Query\Clause\SetInterface;
use Phossa\Query\Clause\FromInterface;
use Phossa\Query\Clause\WhereInterface;
use Phossa\Query\Statement\StatementInterface;

/**
 * UpdateInterface
 *
 * @package Phossa\Query
 * @author  Hong Zhang <phossa@126.com>
 * @see     StatementInterface
 * @version 1.0.0
 * @since   1.0.0 added
 */
interface UpdateStatementInterface extends StatementInterface, FromInterface, SetInterface, WhereInterface
{
}
