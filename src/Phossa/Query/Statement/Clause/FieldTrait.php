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

namespace Phossa\Query\Statement\Clause;

/**
 * FieldTrait
 *
 * @trait
 * @package Phossa\Query
 * @author  Hong Zhang <phossa@126.com>
 * @see     FieldInterface
 * @version 1.0.0
 * @since   1.0.0 added
 */
trait FieldTrait
{
    use ClauseTrait;

    /**
     * @inheritDoc
     */
    public function distinct()
    {
        $this->clause['distinct'] = true;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function field($field, /*# string */ $as = '')
    {
        if (is_array($field)) {
            foreach ($field as $key => $val) {
                if (is_numeric($key)) {
                    $this->clause['field'][$val] = true;
                } else {
                    $this->clause['field'][$key] = $val;
                }
            }
        } else {
            $this->clause['field'][(string) $field] =
                '' === $as ? true : (string) $as;
        }
        return $this;
    }
}
