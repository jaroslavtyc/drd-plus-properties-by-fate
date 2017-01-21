<?php
namespace DrdPlus\Tests\PropertiesByFate;

use DrdPlus\PropertiesByFate\PropertiesByFate;
use Granam\Tests\Exceptions\Tools\AbstractExceptionsHierarchyTest;

class ExceptionsHierarchyTest extends AbstractExceptionsHierarchyTest
{
    protected function getTestedNamespace()
    {
        $reflection = new \ReflectionClass(PropertiesByFate::class);

        return $reflection->getNamespaceName();
    }

    protected function getRootNamespace()
    {
        return $this->getTestedNamespace();
    }

}