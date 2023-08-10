<?php

namespace Mv\NumberWordsFrBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class NumberToWordsFrExtension.
 *
 * @author Michaël VEROUX
 */
class IntToWordsFrExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     *
     * @author Michaël VEROUX
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('number_to_words_fr', [IntToWordsFrRuntimeExtension::class, 'intToWords']),
        ];
    }
}
