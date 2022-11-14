<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface ViewPromotionInterface
{
    /**
     * Set creative name
     *
     * @param string $name
     * @return ViewPromotionInterface
     */
    public function setCreativeName(string $name): ViewPromotionInterface;

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
     * @return ViewPromotionInterface
     */
    public function setCreativeSlot(string $slot): ViewPromotionInterface;

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
     * @return ViewPromotionInterface
     */
    public function setLocationId(string $locationId): ViewPromotionInterface;

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
     * @return ViewPromotionInterface
     */
    public function setPromotionId(string $promotionId): ViewPromotionInterface;

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
     * @return ViewPromotionInterface
     */
    public function setPromotionName(string $name): ViewPromotionInterface;

    /**
     * Get promotion name
     *
     * @return string
     */
    public function getPromotionName(): string;

    /**
     * Set items
     *
     * @param ItemPromotionInterface[] $items
     * @return ViewPromotionInterface
     */
    public function setItems(array $items): ViewPromotionInterface;

    /**
     * Get items
     *
     * @return ItemPromotionInterface[]
     */
    public function getItems(): array;
}