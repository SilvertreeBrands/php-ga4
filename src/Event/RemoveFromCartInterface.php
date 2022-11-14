<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface RemoveFromCartInterface
{
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
     * @param ItemInterface[] $items
     * @return RemoveFromCartInterface
     */
    public function setItems(array $items): RemoveFromCartInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}