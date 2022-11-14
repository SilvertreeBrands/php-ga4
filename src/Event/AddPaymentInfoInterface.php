<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface AddPaymentInfoInterface
{
    public const CURRENCY = 'currency';
    public const VALUE = 'value';
    public const COUPON = 'coupon';
    public const PAYMENT_TYPE = 'payment_type';
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
     * @return AddPaymentInfoInterface
     */
    public function setCurrency(string $currency): AddPaymentInfoInterface;

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
     * @return AddPaymentInfoInterface
     */
    public function setValue(float $value): AddPaymentInfoInterface;

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
     * @return AddPaymentInfoInterface
     */
    public function setCoupon(string $coupon): AddPaymentInfoInterface;

    /**
     * Get coupon
     *
     * @return string
     */
    public function getCoupon(): string;

    /**
     * Set payment type
     *
     * @param string $type
     * @return AddPaymentInfoInterface
     */
    public function setPaymentType(string $type): AddPaymentInfoInterface;

    /**
     * Get payment type
     *
     * @return string
     */
    public function getPaymentType(): string;

    /**
     * Set items
     *
     * @param ItemInterface[] $items
     * @return AddPaymentInfoInterface
     */
    public function setItems(array $items): AddPaymentInfoInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}