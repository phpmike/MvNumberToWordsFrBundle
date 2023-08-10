<?php

namespace Mv\NumberWordsFrBundle\Twig;

use Mv\NumberWordsFrBundle\Converter\IntToWordsFrConverter;
use Twig\Extension\RuntimeExtensionInterface;

/**
 * Class NumberToWordsFrRuntimeExtension.
 *
 * @author Michaël VEROUX
 */
class IntToWordsFrRuntimeExtension implements RuntimeExtensionInterface
{
    protected IntToWordsFrConverter $converter;

    /**
     * NumberToWordsFrRuntimeExtension constructor.
     *
     * @param IntToWordsFrConverter $converter
     */
    public function __construct(IntToWordsFrConverter $converter)
    {
        $this->converter = $converter;
    }

    public function intToWords(int $int): string
    {
        return $this->converter->convert($int);
    }
}
