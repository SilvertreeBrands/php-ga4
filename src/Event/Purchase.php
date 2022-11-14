<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class Purchase extends AbstractObject implements PurchaseInterface
{
    public const EVENT_NAME = 'purchase';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = PurchaseInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): PurchaseInterface
    {
        $this->offsetSet(PurchaseInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(PurchaseInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setTransactionId(string $transactionId): PurchaseInterface
    {
        $this->offsetSet(PurchaseInterface::TRANSACTION_ID, $transactionId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTransactionId(): string
    {
        return (string)$this->offsetGet(PurchaseInterface::TRANSACTION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): PurchaseInterface
    {
        $this->offsetSet(PurchaseInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(PurchaseInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setAffiliation(string $affiliation): PurchaseInterface
    {
        $this->offsetSet(PurchaseInterface::AFFILIATION, $affiliation);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getAffiliation(): string
    {
        return (string)$this->offsetGet(PurchaseInterface::AFFILIATION);
    }

    /**
     * @inheritDoc
     */
    public function setCoupon(string $coupon): PurchaseInterface
    {
        $this->offsetSet(PurchaseInterface::COUPON, $coupon);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCoupon(): string
    {
        return (string)$this->offsetGet(PurchaseInterface::COUPON);
    }

    /**
     * @inheritDoc
     */
    public function setShipping(float $shipping): PurchaseInterface
    {
        $this->offsetSet(PurchaseInterface::SHIPPING, $shipping);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getShipping(): float
    {
        return (float)$this->offsetGet(PurchaseInterface::SHIPPING);
    }

    /**
     * @inheritDoc
     */
    public function setTax(float $tax): PurchaseInterface
    {
        $this->offsetSet(PurchaseInterface::TAX, $tax);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTax(): float
    {
        return (float)$this->offsetGet(PurchaseInterface::TAX);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): PurchaseInterface
    {
        $this->offsetSet(PurchaseInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(PurchaseInterface::ITEMS);
    }
}