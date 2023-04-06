<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface BeginCheckoutInterface extends \Silvertree\Ga4\EventInterface
{
    public const CURRENCY = 'currency';
    public const VALUE = 'value';
    public const COUPON = 'coupon';
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
     * @return BeginCheckoutInterface
     */
    public function setCurrency(string $currency): BeginCheckoutInterface;

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
     * @return BeginCheckoutInterface
     */
    public function setValue(float $value): BeginCheckoutInterface;

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
     * @return BeginCheckoutInterface
     */
    public function setCoupon(string $coupon): BeginCheckoutInterface;

    /**
     * Get coupon
     *
     * @return string
     */
    public function getCoupon(): string;

    /**
     * Set items
     *
     * @param \Silvertree\Ga4\ItemInterface[] $items
     * @return BeginCheckoutInterface
     */
    public function setItems(array $items): BeginCheckoutInterface;

    /**
     * Get items
     *
     * @return \Silvertree\Ga4\ItemInterface[]
     */
    public function getItems(): array;
}