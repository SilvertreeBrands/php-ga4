<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface SpendVirtualCurrencyInterface
{
    public const VALUE = 'value';
    public const VIRTUAL_CURRENCY_NAME = 'virtual_currency_name';
    public const ITEM_NAME = 'item_name';

    /**
     * Set value
     *
     * @param float $value
     * @return SpendVirtualCurrencyInterface
     */
    public function setValue(float $value): SpendVirtualCurrencyInterface;

    /**
     * Get value
     *
     * @return float
     */
    public function getValue(): float;

    /**
     * Set virtual currency name
     *
     * @param string $name
     * @return SpendVirtualCurrencyInterface
     */
    public function setVirtualCurrencyName(string $name): SpendVirtualCurrencyInterface;

    /**
     * Get virtual currency name
     *
     * @return string
     */
    public function getVirtualCurrencyName(): string;

    /**
     * Set item name
     *
     * @param string $name
     * @return SpendVirtualCurrencyInterface
     */
    public function setItemName(string $name): SpendVirtualCurrencyInterface;

    /**
     * Get item name
     *
     * @return string
     */
    public function getItemName(): string;
}