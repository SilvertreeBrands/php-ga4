<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface AddToCartInterface extends \Silvertree\Ga4\EventInterface
{
    public const CURRENCY = 'currency';
    public const VALUE = 'value';
    public const ITEMS = 'items';

    public const REQUIRED_PARAMS = [
        self::CURRENCY,
        self::VALUE,
        self::ITEMS
    ];

    /**
     * Set currency
     *
     * @param string $currency
     * @return AddToCartInterface
     */
    public function setCurrency(string $currency): AddToCartInterface;

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Set value
     *
     * @param float $value
     * @return AddToCartInterface
     */
    public function setValue(float $value): AddToCartInterface;

    /**
     * Get value
     *
     * @return float
     */
    public function getValue(): float;

    /**
     * Set items
     *
     * @param \Silvertree\Ga4\ItemInterface[] $items
     * @return AddToCartInterface
     */
    public function setItems(array $items): AddToCartInterface;

    /**
     * Get items
     *
     * @return \Silvertree\Ga4\ItemInterface[]
     */
    public function getItems(): array;
}