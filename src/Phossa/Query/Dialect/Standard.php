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

/**
 * Standard Query Language dialect
 *
 * @package Phossa\Query
 * @author  Hong Zhang <phossa@126.com>
 * @see     DialectInterface
 * @version 1.0.0
 * @since   1.0.0 added
 */
class Standard implements DialectInterface
{
    /**
     *
     *
     * @var    array
     * @access protected
     */
    protected $clauses = [];

    /**
     * Build 'FROM' clause
     *
     * @return string
     * @access protected
     */
    protected function buildFromClause()
    {
        $res = '';
        if (isset($this->clauses['from'])) {

        }
        return $res;
    }
}
