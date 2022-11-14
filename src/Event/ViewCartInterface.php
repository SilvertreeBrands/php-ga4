<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface ViewCartInterface
{
    public const CURRENCY = 'currency';
    public const VALUE = 'value';
    public const ITEMS = 'items';

    /**
     * Set currency
     *
     * @param string $currency
     * @return ViewCartInterface
     */
    public function setCurrency(string $currency): ViewCartInterface;

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
     * @return ViewCartInterface
     */
    public function setValue(float $value): ViewCartInterface;

    /**
     * Get value
     *
     * @return float
     */
    public function getValue(): float;

    /**
     * Set items
     *
     * @param ItemInterface[] $items
     * @return ViewCartInterface
     */
    public function setItems(array $items): ViewCartInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}