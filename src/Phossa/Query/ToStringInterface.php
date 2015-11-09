<?php
/*
 * Phossa Project
 *
 * @see         http://www.phossa.com/
 * @copyright   Copyright (c) 2015 phossa.com
 * @license     http://mit-license.org/ MIT License
 */
/*# declare(strict_types=1); */

namespace Phossa\Query;

/**
 * Able to print out the query string
 *
 * @interface
 * @package \Phossa\Query
 * @author  Hong Zhang <phossa@126.com>
 * @version 1.0.0
 * @since   1.0.0 added
 */
interface ToStringInterface
{
    /**
     * Set the driver and return the query string
     *
     * @param  Driver\DriverInterface $driver (optional) specific driver
     * @return string
     * @access public
     * @api
     */
    public function toSql(
        Driver\DriverInterface $driver = null
    )/*# : string */;

    /**
     * Return the query string
     *
     * @param  void
     * @return string
     * @access public
     * @api
     */
    public function __toString()/*# string */;
}
