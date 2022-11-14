<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class ViewPromotion extends AbstractEvent implements ViewPromotionInterface
{
    public const EVENT_NAME = 'view_promotion';

    /**
     * @inheritDoc
     */
    public function setCreativeName(string $name): ViewPromotionInterface
    {
        $this->offsetSet(ViewPromotionInterface::CREATIVE_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCreativeName(): string
    {
        return (string)$this->offsetGet(ViewPromotionInterface::CREATIVE_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setCreativeSlot(string $slot): ViewPromotionInterface
    {
        $this->offsetSet(ViewPromotionInterface::CREATIVE_SLOT, $slot);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCreativeSlot(): string
    {
        return (string)$this->offsetGet(ViewPromotionInterface::CREATIVE_SLOT);
    }

    /**
     * @inheritDoc
     */
    public function setLocationId(string $locationId): ViewPromotionInterface
    {
        $this->offsetSet(ViewPromotionInterface::LOCATION_ID, $locationId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLocationId(): string
    {
        return (string)$this->offsetGet(ViewPromotionInterface::LOCATION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPromotionId(string $promotionId): ViewPromotionInterface
    {
        $this->offsetSet(ViewPromotionInterface::PROMOTION_ID, $promotionId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPromotionId(): string
    {
        return (string)$this->offsetGet(ViewPromotionInterface::PROMOTION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPromotionName(string $name): ViewPromotionInterface
    {
        $this->offsetSet(ViewPromotionInterface::PROMOTION_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPromotionName(): string
    {
        return (string)$this->offsetGet(ViewPromotionInterface::PROMOTION_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items): ViewPromotionInterface
    {
        $this->offsetSet(ViewPromotionInterface::ITEMS, $items);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItems(): array
    {
        return (array)$this->offsetGet(ViewPromotionInterface::ITEMS);
    }
}