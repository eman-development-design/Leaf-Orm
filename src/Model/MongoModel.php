<?php
/**
 * Part of Leaf ORM
 */

namespace Leaf\Model;

use MongoDB\Model\BSONDocument;

/**
 * Interface MongoModel
 * @package Leaf\Model
 */
interface MongoModel
{
    /**
     * Maps Mongo document to Model Object
     * @param array|BSONDocument $document
     */
    public function map(BSONDocument $document) : void;

    /**
     * Converts object to array
     * @return array
     */
    public function toArray() : array;
}