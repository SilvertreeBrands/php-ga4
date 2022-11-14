<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface ViewItemInterface
{
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
     * @param ItemInterface[] $items
     * @return ViewItemInterface
     */
    public function setItems(array $items): ViewItemInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}