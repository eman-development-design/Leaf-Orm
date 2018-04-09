<?php
/**
 * Part of Leaf ORM
 */

namespace Leaf\Repositories;

use MongoDB\Client;

/**
 * Class MongoRepository
 * @package Leaf\Repositories
 */
abstract class MongoRepository
{
    /**
     * @var Client
     */
    protected $mongo;

    /**
     * @var \MongoDB\Collection
     */
    protected $collection;

    /**
     * MongoRepository constructor.
     * @param string $connStr
     * @throws \MongoDB\Driver\Exception\InvalidArgumentException
     * @throws \MongoDB\Driver\Exception\RuntimeException
     * @throws \MongoDB\Exception\InvalidArgumentException
     */
    public function __construct(string $connStr)
    {
        $this->mongo = new Client($connStr);
    }

    /**
     * @throws \MongoDB\Exception\InvalidArgumentException
     */
    abstract protected function GetCollection() : void;
}