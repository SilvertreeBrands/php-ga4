<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class RemoveFromCart extends AbstractEvent implements RemoveFromCartInterface
{
    public const EVENT_NAME = 'remove_from_cart';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = RemoveFromCartInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): RemoveFromCartInterface
    {
        $this->offsetSet(RemoveFromCartInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(RemoveFromCartInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): RemoveFromCartInterface
    {
        $this->offsetSet(RemoveFromCartInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(RemoveFromCartInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): RemoveFromCartInterface
    {
        $this->offsetSet(RemoveFromCartInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(RemoveFromCartInterface::ITEMS);
    }
}