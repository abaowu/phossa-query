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

namespace Phossa\Query\Dialect;

use Phossa\Query\Builder\BuilderInterface;
use Phossa\Query\Dialect\Sqlite\ReplaceStatementInterace;

/**
 * SQLITE dialect
 *
 * @package Phossa\Query
 * @author  Hong Zhang <phossa@126.com>
 * @see     Common
 * @version 1.0.0
 * @since   1.0.0 added
 */
class Sqlite extends Common
{
    /**
     * Current dialect string
     *
     * @var    string
     * @access protected
     */
    protected $dialect = 'Sqlite';

    /**
     * {@inheritDoc}
     *
     * @return ReplaceStatementInterace
     */
    public function replace(BuilderInterface $builder)/*# : ReplaceStatementInterface */
    {
        $class = __NAMESPACE__ . '\\' . $this->dialect . '\\Replace';
        return new $class($builder);
    }
}
