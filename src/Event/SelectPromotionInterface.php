<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface SelectPromotionInterface extends \Silvertree\Ga4\EventInterface
{
    public const CREATIVE_NAME = 'creative_name';
    public const CREATIVE_SLOT = 'creative_slot';
    public const LOCATION_ID = 'location_id';
    public const PROMOTION_ID = 'promotion_id';
    public const PROMOTION_NAME = 'promotion_name';
    public const ITEMS = 'items';

    public const REQUIRED_PARAMS = [];

    /**
     * Set creative name
     *
     * @param string $name
     * @return SelectPromotionInterface
     */
    public function setCreativeName(string $name): SelectPromotionInterface;

    /**
     * Get creative name
     *
     * @return string
     */
    public function getCreativeName(): string;

    /**
     * Set creative slot
     *
     * @param string $slot
     * @return SelectPromotionInterface
     */
    public function setCreativeSlot(string $slot): SelectPromotionInterface;

    /**
     * Get creative slot
     *
     * @return string
     */
    public function getCreativeSlot(): string;

    /**
     * Set location ID
     *
     * @param string $locationId
     * @return SelectPromotionInterface
     */
    public function setLocationId(string $locationId): SelectPromotionInterface;

    /**
     * Get location ID
     *
     * @return string
     */
    public function getLocationId(): string;

    /**
     * Set promotion ID
     *
     * @param string $promotionId
     * @return SelectPromotionInterface
     */
    public function setPromotionId(string $promotionId): SelectPromotionInterface;

    /**
     * Get promotion ID
     *
     * @return string
     */
    public function getPromotionId(): string;

    /**
     * Set promotion name
     *
     * @param string $name
     * @return SelectPromotionInterface
     */
    public function setPromotionName(string $name): SelectPromotionInterface;

    /**
     * Get promotion name
     *
     * @return string
     */
    public function getPromotionName(): string;

    /**
     * Set items
     *
     * @param \Silvertree\Ga4\ItemPromotionInterface[] $items
     * @return SelectPromotionInterface
     */
    public function setItems(array $items): SelectPromotionInterface;

    /**
     * Get items
     *
     * @return \Silvertree\Ga4\ItemPromotionInterface[]
     */
    public function getItems(): array;
}