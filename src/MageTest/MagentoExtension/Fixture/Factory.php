<?php

namespace MageTest\MagentoExtension\Fixture;

class Factory
{
    /**
     * create the requested fixture generator
     *
     * @param $identifier string name of fixture generator
     *
     * @return \MageTest\MagentoExtension\Fixture
     */
    public function create($identifier)
    {
        switch ($identifier) {
            case 'product': return new Product();
            default: throw new \InvalidArgumentException();
        }
    }
}
