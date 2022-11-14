<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class BeginCheckout extends AbstractEvent implements BeginCheckoutInterface
{
    public const EVENT_NAME = 'begin_checkout';

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): BeginCheckoutInterface
    {
        $this->offsetSet(BeginCheckoutInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(BeginCheckoutInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): BeginCheckoutInterface
    {
        $this->offsetSet(BeginCheckoutInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(BeginCheckoutInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setCoupon(string $coupon): BeginCheckoutInterface
    {
        $this->offsetSet(BeginCheckoutInterface::COUPON, $coupon);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCoupon(): string
    {
        return (string)$this->offsetGet(BeginCheckoutInterface::COUPON);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): BeginCheckoutInterface
    {
        $this->offsetSet(BeginCheckoutInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(BeginCheckoutInterface::ITEMS);
    }
}