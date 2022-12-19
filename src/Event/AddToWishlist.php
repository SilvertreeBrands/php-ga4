<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class AddToWishlist extends AbstractObject implements AddToWishlistInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'add_to_wishlist';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = AddToWishlistInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): AddToWishlistInterface
    {
        $this->offsetSet(AddToWishlistInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(AddToWishlistInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): AddToWishlistInterface
    {
        $this->offsetSet(AddToWishlistInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(AddToWishlistInterface::VALUE);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): AddToWishlistInterface
    {
        $this->offsetSet(AddToWishlistInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(AddToWishlistInterface::ITEMS);
    }
}