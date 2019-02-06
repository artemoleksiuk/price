<?php

namespace ArtemOleksiuk\Price\Interfaces;

/**
 * Interface IDiscount
 * @package ArtemOleksiuk\Price\Interfaces
 */
interface IDiscount
{
    public static function priceWithDiscount();

    public static function fixedDiscount();

    public static function percentageDiscount();
}