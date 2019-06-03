# Leaf-Orm
A super light ORM-ish library for using MongoDB with PHP

### This package has been depreciated, the new library to use is [MongoDB Helpers](https://github.com/eman-development-design/mongodb-helpers)

## Requirement

* PHP 7.1 or newer
* MongoDB Extension 1.1 or newer

## Installation

```composer require eman-development-design/Leaf-Orm```

## Usage

There's two simple items, a model and a repository object.

### Model

Consider the example below:

```php
use MongoDB\BSON\Serializable;
use MongoDB\Model\BSONDocument;
use Leaf\Model\MongoModel

class User implements Serializable, MongoModel
{
    public $userGuid;
    public $email;
    public $firstName;
    public $lastName;
    
    public function bsonSerialize() : array
    {
        return [
            'UserGuid' => $this->userGuid,
            'Email' => $this->email,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName
        ];
    }

    public function map(BSONDocument $document)
    {
        $this->userGuid = $document['UserGuid'];
        $this->email = $document['Email'];
        $this->firstName = $document['FirstName'];
        $this->lastName = $document['LastName'];
    }

    public function toArray() : array
    {
        return [
            'UserGuid' => $this->userGuid,
            'Email' => $this->email,
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName
        ];
    }
}
```

```map``` will take a BSON Document and populate the model.

```toArray``` will convert your model to an array.

### Repository

```MongoRepository``` is used for your repository layer, it only has one method, which is a way to fetch a collection.

## Bugs, Suggestions

Fill out an issue ticket to report any issues or to suggest ideas to make this library better.

## Contribute

I welcome people who wish to contribute to this project, just create a pull request and I'll review all the changes.
