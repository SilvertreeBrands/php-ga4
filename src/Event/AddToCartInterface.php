<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface AddToCartInterface
{
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
     * @param ItemInterface[] $items
     * @return AddToCartInterface
     */
    public function setItems(array $items): AddToCartInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}