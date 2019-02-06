<?php

namespace ArtemOleksiuk\Price\Interfaces;

/**
 * Interface ICart
 * @package ArtemOleksiuk\Price\Interfaces
 */
interface ICart
{
    public static function totalPrice();

    public static function totalPriceWithoutVAT();

    public static function couponDiscountPrice();

    public static function deliveryPrice();

    public static function minPriceForFreeDelivery();
}