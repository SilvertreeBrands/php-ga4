<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class AddPaymentInfo extends AbstractObject implements AddPaymentInfoInterface
{
    public const EVENT_NAME = 'add_payment_info';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = AddPaymentInfoInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): AddPaymentInfoInterface
    {
        $this->offsetSet(AddPaymentInfoInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(AddPaymentInfoInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): AddPaymentInfoInterface
    {
        $this->offsetSet(AddPaymentInfoInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(AddPaymentInfoInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setCoupon(string $coupon): AddPaymentInfoInterface
    {
        $this->offsetSet(AddPaymentInfoInterface::COUPON, $coupon);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCoupon(): string
    {
        return (string)$this->offsetGet(AddPaymentInfoInterface::COUPON);
    }

    /**
     * @inheritDoc
     */
    public function setPaymentType(string $type): AddPaymentInfoInterface
    {
        $this->offsetSet(AddPaymentInfoInterface::PAYMENT_TYPE, $type);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPaymentType(): string
    {
        return (string)$this->offsetGet(AddPaymentInfoInterface::PAYMENT_TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): AddPaymentInfoInterface
    {
        $this->offsetSet(AddPaymentInfoInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(AddPaymentInfoInterface::ITEMS);
    }
}