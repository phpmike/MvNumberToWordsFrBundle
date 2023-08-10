<?php

namespace Mv\NumberWordsFrBundle\Converter;

use Mv\NumberWordsFr\Converter\IntToWordsFrConverterInterface;
use Mv\NumberWordsFr\Converter\IntToWordsFrConverter AS LibConverter;

/**
 * Class NumberToWordConvert.
 *
 * @author Michaël VEROUX
 */
class IntToWordsFrConverter
{
    /**
     * @var IntToWordsFrConverterInterface
     */
    protected IntToWordsFrConverterInterface $converter;

    /**
     * NumberToWordConverter constructor.
     *
     * @param IntToWordsFrConverterInterface $converter
     */
    public function __construct()
    {
        $this->converter = new LibConverter();
    }

    /**
     * @param int $int
     *
     * @return string
     *
     * @author Michaël VEROUX
     */
    public function convert(int $int): string
    {
        return $this->converter->convert($int);
    }
}
