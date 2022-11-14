<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class SelectPromotion extends AbstractObject implements SelectPromotionInterface
{
    public const EVENT_NAME = 'select_promotion';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = SelectPromotionInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCreativeName(string $name): SelectPromotionInterface
    {
        $this->offsetSet(SelectPromotionInterface::CREATIVE_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCreativeName(): string
    {
        return (string)$this->offsetGet(SelectPromotionInterface::CREATIVE_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setCreativeSlot(string $slot): SelectPromotionInterface
    {
        $this->offsetSet(SelectPromotionInterface::CREATIVE_SLOT, $slot);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCreativeSlot(): string
    {
        return (string)$this->offsetGet(SelectPromotionInterface::CREATIVE_SLOT);
    }

    /**
     * @inheritDoc
     */
    public function setLocationId(string $locationId): SelectPromotionInterface
    {
        $this->offsetSet(SelectPromotionInterface::LOCATION_ID, $locationId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLocationId(): string
    {
        return (string)$this->offsetGet(SelectPromotionInterface::LOCATION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPromotionId(string $promotionId): SelectPromotionInterface
    {
        $this->offsetSet(SelectPromotionInterface::PROMOTION_ID, $promotionId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPromotionId(): string
    {
        return (string)$this->offsetGet(SelectPromotionInterface::PROMOTION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPromotionName(string $name): SelectPromotionInterface
    {
        $this->offsetSet(SelectPromotionInterface::PROMOTION_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPromotionName(): string
    {
        return (string)$this->offsetGet(SelectPromotionInterface::PROMOTION_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): SelectPromotionInterface
    {
        $this->offsetSet(SelectPromotionInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(SelectPromotionInterface::ITEMS);
    }
}