<?php
/**
 * CommonPlugin for phplist.
 *
 * This file is a part of CommonPlugin.
 *
 * @category  phplist
 *
 * @author    Duncan Cameron
 * @copyright 2011-2018 Duncan Cameron
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3
 */

namespace phpList\plugin\Common;

use SqlFormatter;

/**
 * This class provides an interface to the phplist database subroutines.
 */
class DB
{
    private $logger;

    /**
     * Executes a query.
     * Logs the query using a callback so that the sql is formatted only when logging is enabled.
     *
     * @param string $sql the query
     *
     * @return \mysqli_result
     */
    private function _query($sql)
    {
        $level = error_reporting(0);

        $time_start = microtime(true);
        $resource = Sql_Query($sql);
        $callback = new StringCallback(
            function () use ($sql, $time_start) {
                $formatted = SqlFormatter::format($sql, false);
                $elapsed = (microtime(true) - $time_start) * 1000;

                return "elapsed time $elapsed ms\n$formatted";
            }
        );
        $this->logger->debug($callback);
        error_reporting($level);

        if (!$resource) {
            throw new \Exception('A problem with the query: ' . $sql);
        }

        return $resource;
    }

    public function __construct()
    {
        $this->logger = Logger::instance();
    }

    /**
     * Runs a query and returns the id of the inserted row.
     *
     * @param string $sql the query
     *
     * @return int
     */
    public function queryInsertId($sql)
    {
        $resource = $this->_query($sql);

        return Sql_Insert_Id();
    }

    /**
     * Runs a query and returns the number of rows affected.
     *
     * @param string $sql the query
     *
     * @return int
     */
    public function queryAffectedRows($sql)
    {
        $resource = $this->_query($sql);

        return Sql_Affected_Rows();
    }

    /**
     * Runs a query and returns all the results.
     *
     * @param string $sql the query
     *
     * @return DBResultIterator iterator
     */
    public function queryAll($sql)
    {
        return new DBResultIterator($this->_query($sql));
    }

    /**
     * Runs a query and returns the first row of the results.
     *
     * @param string $sql the query
     *
     * @return array|null associative array of the row or null when the result is empty
     */
    public function queryRow($sql)
    {
        $resource = $this->_query($sql);

        return Sql_Fetch_Assoc($resource);
    }

    /**
     * Runs a query and returns a single value which can be either a named field or the first field.
     *
     * @param string $sql   the query
     * @param string $field a named field to return (optional)
     *
     * @return string|false the field value or false if no rows
     */
    public function queryOne($sql, $field = null)
    {
        $row = $this->queryRow($sql);

        if (!$row) {
            return false;
        }

        if ($field === null) {
            return reset($row);
        }

        return $row[$field];
    }

    /**
     * Runs a query and returns an array containing all result values of a single field.
     *
     * @param string $sql   the query
     * @param string $field a named field to return
     * @param string $field a named field to use as the index
     *
     * @return array
     */
    public function queryColumn($sql, $field, $index = null)
    {
        $iterator = $this->queryAll($sql);

        return array_column(iterator_to_array($iterator), $field, $index);
    }
}
