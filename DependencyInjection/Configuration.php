<?php

namespace Eoko\AWSMailBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('eoko_aws_mail');

        $rootNode
            ->children()
                ->booleanNode('use_environment')
                    ->defaultFalse()
                ->end()
                ->arrayNode('configuration')
                    ->scalarNode('access_key_id')->end()
                    ->scalarNode('secret_access_key')->end()
                    ->scalarNode('default_region')->end()
                ->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
