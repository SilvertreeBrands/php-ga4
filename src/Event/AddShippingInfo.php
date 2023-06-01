<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

class AddShippingInfo extends AbstractEvent implements AddShippingInfoInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'add_shipping_info';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = AddShippingInfoInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): AddShippingInfoInterface
    {
        $this->offsetSet(AddShippingInfoInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(AddShippingInfoInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): AddShippingInfoInterface
    {
        $this->offsetSet(AddShippingInfoInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(AddShippingInfoInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setCoupon(string $coupon): AddShippingInfoInterface
    {
        $this->offsetSet(AddShippingInfoInterface::COUPON, $coupon);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCoupon(): string
    {
        return (string)$this->offsetGet(AddShippingInfoInterface::COUPON);
    }

    /**
     * @inheritDoc
     */
    public function setShippingTier(string $type): AddShippingInfoInterface
    {
        $this->offsetSet(AddShippingInfoInterface::SHIPPING_TIER, $type);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getShippingTier(): string
    {
        return (string)$this->offsetGet(AddShippingInfoInterface::SHIPPING_TIER);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): AddShippingInfoInterface
    {
        $this->offsetSet(AddShippingInfoInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(AddShippingInfoInterface::ITEMS);
    }
}