<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface RemoveFromCartInterface
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
     * @return RemoveFromCartInterface
     */
    public function setCurrency(string $currency): RemoveFromCartInterface;

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
     * @return RemoveFromCartInterface
     */
    public function setValue(float $value): RemoveFromCartInterface;

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
     * @return RemoveFromCartInterface
     */
    public function setItems(array $items): RemoveFromCartInterface;

    /**
     * Get items
     *
     * @return \Silvertree\Ga4\ItemInterface[]
     */
    public function getItems(): array;
}