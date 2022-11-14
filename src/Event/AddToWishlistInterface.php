<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface AddToWishlistInterface
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
     * @return AddToWishlistInterface
     */
    public function setCurrency(string $currency): AddToWishlistInterface;

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
     * @return AddToWishlistInterface
     */
    public function setValue(float $value): AddToWishlistInterface;

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
     * @return AddToWishlistInterface
     */
    public function setItems(array $items): AddToWishlistInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}