<?php

namespace Mv\NumberWordsFrBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle as BaseBundle;

/**
 * Class MvNumberToWordsFrBundle.
 *
 * @author Michaël VEROUX
 */
class MvNumberToWordsFrBundle extends BaseBundle
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
        return strtr(__DIR__, '\\', '/');
    }
}
