<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface ViewItemInterface extends \Silvertree\Ga4\EventInterface
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
     * @return ViewItemInterface
     */
    public function setCurrency(string $currency): ViewItemInterface;

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
     * @return ViewItemInterface
     */
    public function setValue(float $value): ViewItemInterface;

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
     * @return ViewItemInterface
     */
    public function setItems(array $items): ViewItemInterface;

    /**
     * Get items
     *
     * @return \Silvertree\Ga4\ItemInterface[]
     */
    public function getItems(): array;
}