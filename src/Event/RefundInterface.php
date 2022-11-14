<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface RefundInterface
{
    /**
     * Set currency
     *
     * @param string $currency
     * @return RefundInterface
     */
    public function setCurrency(string $currency): RefundInterface;

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
     * @return RefundInterface
     */
    public function setTransactionId(string $transactionId): RefundInterface;

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
     * @return RefundInterface
     */
    public function setValue(float $value): RefundInterface;

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
     * @return RefundInterface
     */
    public function setAffiliation(string $affiliation): RefundInterface;

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
     * @return RefundInterface
     */
    public function setCoupon(string $coupon): RefundInterface;

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
     * @return RefundInterface
     */
    public function setShipping(float $shipping): RefundInterface;

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
     * @return RefundInterface
     */
    public function setTax(float $tax): RefundInterface;

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
     * @return RefundInterface
     */
    public function setItems(array $items): RefundInterface;

    /**
     * Get items
     *
     * @return ItemInterface[]
     */
    public function getItems(): array;
}