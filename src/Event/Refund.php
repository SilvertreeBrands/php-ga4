<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class Refund extends AbstractEvent implements RefundInterface
{
    public const EVENT_NAME = 'refund';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = RefundInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): RefundInterface
    {
        $this->offsetSet(RefundInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(RefundInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setTransactionId(string $transactionId): RefundInterface
    {
        $this->offsetSet(RefundInterface::TRANSACTION_ID, $transactionId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTransactionId(): string
    {
        return (string)$this->offsetGet(RefundInterface::TRANSACTION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): RefundInterface
    {
        $this->offsetSet(RefundInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(RefundInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setAffiliation(string $affiliation): RefundInterface
    {
        $this->offsetSet(RefundInterface::AFFILIATION, $affiliation);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getAffiliation(): string
    {
        return (string)$this->offsetGet(RefundInterface::AFFILIATION);
    }

    /**
     * @inheritDoc
     */
    public function setCoupon(string $coupon): RefundInterface
    {
        $this->offsetSet(RefundInterface::COUPON, $coupon);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCoupon(): string
    {
        return (string)$this->offsetGet(RefundInterface::COUPON);
    }

    /**
     * @inheritDoc
     */
    public function setShipping(float $shipping): RefundInterface
    {
        $this->offsetSet(RefundInterface::SHIPPING, $shipping);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getShipping(): float
    {
        return (float)$this->offsetGet(RefundInterface::SHIPPING);
    }

    /**
     * @inheritDoc
     */
    public function setTax(float $tax): RefundInterface
    {
        $this->offsetSet(RefundInterface::TAX, $tax);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTax(): float
    {
        return (float)$this->offsetGet(RefundInterface::TAX);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): RefundInterface
    {
        $this->offsetSet(RefundInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(RefundInterface::ITEMS);
    }
}