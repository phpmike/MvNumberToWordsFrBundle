<?php

namespace Mv\NumberWordsFrBundle;

use Mv\NumberWordsFrBundle\Twig\IntToWordsFrExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle as BaseBundle;

/**
 * Class MvNumberToWordsFrBundle.
 *
 * @author Michaël VEROUX
 */
class MvNumberWordsFrBundle extends BaseBundle
{
    /**
     * {@inheritdoc}
     */
    public function getNamespace(): string
    {
        return __NAMESPACE__;
    }

    /**
     * {@inheritdoc}
     */
    public function getPath(): string
    {
        return __DIR__.'/../';
    }
}
