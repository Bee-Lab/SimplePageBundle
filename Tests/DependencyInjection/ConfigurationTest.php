<?php

namespace Beelab\SimplePageBundle\Tests\DependencyInjection;

use Beelab\SimplePageBundle\DependencyInjection\Configuration;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * @group unit
 */
class ConfigurationTest extends TestCase
{
    public function testGetConfigTreeBuilder()
    {
        $configuration = new Configuration();
        $this->assertInstanceOf('Symfony\Component\Config\Definition\Builder\TreeBuilder', $configuration->getConfigTreeBuilder());
    }
}
