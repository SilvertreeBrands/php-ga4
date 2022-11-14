<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface ItemInterface
{
    /**
     * Set item ID
     *
     * @param string $itemId
     * @return ItemInterface
     */
    public function setItemId(string $itemId): ItemInterface;

    /**
     * Get item ID
     *
     * @return string
     */
    public function getItemId(): string;

    /**
     * Set item name
     *
     * @param string $name
     * @return ItemInterface
     */
    public function setItemName(string $name): ItemInterface;

    /**
     * Get item name
     *
     * @return string
     */
    public function getItemName(): string;

    /**
     * Set affiliation
     *
     * @param string $affiliation
     * @return ItemInterface
     */
    public function setAffiliation(string $affiliation): ItemInterface;

    /**
     * Get affiliation
     *
     * @return string
     */
    public function getAffiliation(): string;

    /**
     * Set coupon
     *
     * @param string $coupon
     * @return ItemInterface
     */
    public function setCoupon(string $coupon): ItemInterface;

    /**
     * Get coupon
     *
     * @return string
     */
    public function getCoupon(): string;

    /**
     * Set currency
     *
     * @param string $currency
     * @return ItemInterface
     */
    public function setCurrency(string $currency): ItemInterface;

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency(): string;

    /**
     * Set discount
     *
     * @param float $discount
     * @return ItemInterface
     */
    public function setDiscount(float $discount): ItemInterface;

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount(): float;

    /**
     * Set index
     *
     * @param int $index
     * @return ItemInterface
     */
    public function setIndex(int $index): ItemInterface;

    /**
     * Get index
     *
     * @return int
     */
    public function getIndex(): int;

    /**
     * Set item brand
     *
     * @param string $brand
     * @return ItemInterface
     */
    public function setItemBrand(string $brand): ItemInterface;

    /**
     * Get item brand
     *
     * @return string
     */
    public function getItemBrand(): string;

    /**
     * Set item category one
     *
     * @param string $category
     * @return ItemInterface
     */
    public function setItemCategoryOne(string $category): ItemInterface;

    /**
     * Get item category one
     *
     * @return string
     */
    public function getItemCategoryOne(): string;

    /**
     * Set item category two
     *
     * @param string $category
     * @return ItemInterface
     */
    public function setItemCategoryTwo(string $category): ItemInterface;

    /**
     * Get item category two
     *
     * @return string
     */
    public function getItemCategoryTwo(): string;

    /**
     * Set item category three
     *
     * @param string $category
     * @return ItemInterface
     */
    public function setItemCategoryThree(string $category): ItemInterface;

    /**
     * Get item category three
     *
     * @return string
     */
    public function getItemCategoryThree(): string;

    /**
     * Set item category four
     *
     * @param string $category
     * @return ItemInterface
     */
    public function setItemCategoryFour(string $category): ItemInterface;

    /**
     * Get item category four
     *
     * @return string
     */
    public function getItemCategoryFour(): string;

    /**
     * Set item category five
     *
     * @param string $category
     * @return ItemInterface
     */
    public function setItemCategoryFive(string $category): ItemInterface;

    /**
     * Get item category five
     *
     * @return string
     */
    public function getItemCategoryFive(): string;

    /**
     * Set item list ID
     *
     * @param string $listId
     * @return ItemInterface
     */
    public function setItemListId(string $listId): ItemInterface;

    /**
     * Get item list ID
     *
     * @return string
     */
    public function getItemListId(): string;

    /**
     * Set item list name
     *
     * @param string $name
     * @return ItemInterface
     */
    public function setItemListName(string $name): ItemInterface;

    /**
     * Get item list name
     *
     * @return string
     */
    public function getItemListName(): string;

    /**
     * Set item variant
     *
     * @param string $variant
     * @return ItemInterface
     */
    public function setItemVariant(string $variant): ItemInterface;

    /**
     * Get item variant
     *
     * @return string
     */
    public function getItemVariant(): string;

    /**
     * Set location ID
     *
     * @param string $locationId
     * @return ItemInterface
     */
    public function setLocationId(string $locationId): ItemInterface;

    /**
     * Get location ID
     *
     * @return string
     */
    public function getLocationId(): string;

    /**
     * Set price
     *
     * @param float $price
     * @return ItemInterface
     */
    public function setPrice(float $price): ItemInterface;

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice(): float;

    /**
     * Set quantity
     *
     * @param float $quantity
     * @return ItemInterface
     */
    public function setQuantity(float $quantity): ItemInterface;

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity(): float;
}