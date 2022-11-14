<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface PurchaseInterface
{
    public const CURRENCY = 'currency';
    public const TRANSACTION_ID = 'transaction_id';
    public const VALUE = 'value';
    public const AFFILIATION = 'affiliation';
    public const COUPON = 'coupon';
    public const SHIPPING = 'shipping';
    public const TAX = 'tax';
    public const ITEMS = 'items';

    public const REQUIRED_PARAMS = [
        self::CURRENCY,
        self::TRANSACTION_ID,
        self::VALUE,
        self::ITEMS
    ];

    /**
     * Set currency
     *
     * @param string $currency
     * @return PurchaseInterface
     */
    public function setCurrency(string $currency): PurchaseInterface;

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Set transaction ID
     *
     * @param string $transactionId
     * @return PurchaseInterface
     */
    public function setTransactionId(string $transactionId): PurchaseInterface;

    /**
     * Get transaction ID
     *
     * @return string
     */
    public function getTransactionId(): string;

    /**
     * Set value
     *
     * @param float $value
     * @return PurchaseInterface
     */
    public function setValue(float $value): PurchaseInterface;

    /**
     * Get value
     *
     * @return float
     */
    public function getValue(): float;

    /**
     * Set affiliation
     *
     * @param string $affiliation
     * @return PurchaseInterface
     */
    public function setAffiliation(string $affiliation): PurchaseInterface;

    /**
     * Get affiliation
     *
     * @return string
     */
    public function getAffiliation(): string;

    /**
     * Set coupon
     *
     * @param string $coupon
     * @return PurchaseInterface
     */
    public function setCoupon(string $coupon): PurchaseInterface;

    /**
     * Get coupon
     *
     * @return string
     */
    public function getCoupon(): string;

    /**
     * Set shipping
     *
     * @param float $shipping
     * @return PurchaseInterface
     */
    public function setShipping(float $shipping): PurchaseInterface;

    /**
     * Get shipping
     *
     * @return float
     */
    public function getShipping(): float;

    /**
     * Set tax
     *
     * @param float $tax
     * @return PurchaseInterface
     */
    public function setTax(float $tax): PurchaseInterface;

    /**
     * Get tax
     *
     * @return float
     */
    public function getTax(): float;

    /**
     * Set items
     *
     * @param ItemInterface[] $items
     * @return PurchaseInterface
     */
    public function setItems(array $items): PurchaseInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}