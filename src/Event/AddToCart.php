<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class AddToCart extends AbstractObject implements AddToCartInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'add_to_cart';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = AddToCartInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): AddToCartInterface
    {
        $this->offsetSet(AddToCartInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(AddToCartInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): AddToCartInterface
    {
        $this->offsetSet(AddToCartInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(AddToCartInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): AddToCartInterface
    {
        $this->offsetSet(AddToCartInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(AddToCartInterface::ITEMS);
    }
}