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

use Psr\Log\LoggerAwareInterface;

/**
 * Builder's logger interface
 *
 * For logging query or builder debuging messages
 *
 * @interface
 * @package \Phossa\Query
 * @author  Hong Zhang <phossa@126.com>
 * @see     \Psr\Log\LoggerInterface
 * @see     \Psr\Log\LoggerAwareInterface
 * @version 1.0.0
 * @since   1.0.0 added
 */
interface LoggerInterface extends LoggerAwareInterface
{
    /**
     * Send warning message to the Psr logger
     *
     * @param  string $message warning messsage
     * @param  array $context
     * @return void
     * @access public
     */
    public function warning(
        /*# string */ $message,
        array $context = []
    );
}