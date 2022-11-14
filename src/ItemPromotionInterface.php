<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

interface ItemPromotionInterface extends ItemInterface
{
    public const PROMOTION_ID = 'promotion_id';
    public const PROMOTION_NAME = 'promotion_name';

    /**
     * Set promotion ID
     *
     * @param string $promotionId
     * @return ItemPromotionInterface
     */
    public function setPromotionId(string $promotionId): ItemPromotionInterface;

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
     * @return ItemPromotionInterface
     */
    public function setPromotionName(string $name): ItemPromotionInterface;

    /**
     * Get promotion name
     *
     * @return string
     */
    public function getPromotionName(): string;
}