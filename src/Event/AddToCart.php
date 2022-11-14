<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class AddToCart extends AbstractEvent implements AddToCartInterface
{
    public const EVENT_NAME = 'add_to_cart';

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