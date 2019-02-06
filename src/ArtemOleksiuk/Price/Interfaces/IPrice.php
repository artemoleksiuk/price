<?php

namespace ArtemOleksiuk\Price\Interfaces;

/**
 * Interface IPrice
 * @package ArtemOleksiuk\Price\Interfaces
 */
interface IPrice
{
    public static function make();

    public static function currencySign();
}