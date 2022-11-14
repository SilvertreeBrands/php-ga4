<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface AddShippingInfoInterface
{
    public const CURRENCY = 'currency';
    public const VALUE = 'value';
    public const COUPON = 'coupon';
    public const SHIPPING_TIER = 'shipping_tier';
    public const ITEMS = 'items';

    /**
     * Set currency
     *
     * @param string $currency
     * @return AddShippingInfoInterface
     */
    public function setCurrency(string $currency): AddShippingInfoInterface;

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
     * @return AddShippingInfoInterface
     */
    public function setValue(float $value): AddShippingInfoInterface;

    /**
     * Get value
     *
     * @return float
     */
    public function getValue(): float;

    /**
     * Set coupon
     *
     * @param string $coupon
     * @return AddShippingInfoInterface
     */
    public function setCoupon(string $coupon): AddShippingInfoInterface;

    /**
     * Get coupon
     *
     * @return string
     */
    public function getCoupon(): string;

    /**
     * Set shipping tier
     *
     * @param string $type
     * @return AddShippingInfoInterface
     */
    public function setShippingTier(string $type): AddShippingInfoInterface;

    /**
     * Get shipping tier
     *
     * @return string
     */
    public function getShippingTier(): string;

    /**
     * Set items
     *
     * @param ItemInterface[] $items
     * @return AddShippingInfoInterface
     */
    public function setItems(array $items): AddShippingInfoInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}