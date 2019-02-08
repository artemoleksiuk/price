<?php

namespace ArtemOleksiuk\Price;

use Exception;

/**
 * Class BasePrice
 * @package ArtemOleksiuk\Price
 */
abstract class BasePrice
{
    /**
     * @var float
     */
    protected $startPrice;

    /**
     * @var float
     */
    private $markup;

    /**
     * BasePrice constructor.
     * @param $price
     * @param $configs
     * @throws Exception
     */
    public function __construct(float $price, array $configs)
    {
        $this->validateConfigs($configs);

        $this->setConfigs($configs);
        $this->setStartPrice($price);
    }

    /**
     * @return float
     */
    protected function getStartPrice()
    {
        return $this->startPrice;
    }

    protected static function generateFinalPrice()
    {

    }

    /**
     * All configs must be required
     *
     * @return array
     */
    private function rules()
    {
        return [
            'markup',
            // ...
        ];
    }

    /**
     * Configs should contain all the necessary fields to avoid the situation of incorrect pricing
     *
     * @param $configs
     * @throws Exception
     */
    private function validateConfigs(array $configs)
    {
        foreach ($this->rules() as $rule) {

            if (!array_key_exists($rule, $configs)) {
                throw new Exception('Config ' . $rule . ' must be required!');
            }

        }
    }

    /**
     * @param array $configs
     */
    private function setConfigs(array $configs)
    {
        foreach($configs as $item) {
            $this->markup = $item->markup;
            // ...
        }
    }

    /**
     * @param float $startPrice
     */
    private function setStartPrice(float $startPrice)
    {
        $this->startPrice = $startPrice;
    }

}