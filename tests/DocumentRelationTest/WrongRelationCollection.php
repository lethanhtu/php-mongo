<?php

namespace Sokil\Mongo\DocumentRelationTest;

class WrongRelationCollection extends \Sokil\Mongo\Collection
{
    public function getDocumentClassName(array $documentData = null)
    {
        return '\Sokil\Mongo\DocumentRelationTest\WrongRelationDocument';
    }
}