<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

class ItemPromotion extends Item implements ItemPromotionInterface
{
    /**
     * @inheritDoc
     */
    public function setPromotionId(string $promotionId): ItemPromotionInterface
    {
        $this->offsetSet(ItemPromotionInterface::PROMOTION_ID, $promotionId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPromotionId(): string
    {
        return (string)$this->offsetGet(ItemPromotionInterface::PROMOTION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPromotionName(string $name): ItemPromotionInterface
    {
        $this->offsetSet(ItemPromotionInterface::PROMOTION_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPromotionName(): string
    {
        return (string)$this->offsetGet(ItemPromotionInterface::PROMOTION_NAME);
    }
}