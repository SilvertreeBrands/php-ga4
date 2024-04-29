<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

class Item extends AbstractObject implements ItemInterface
{
    /**
     * @inheritDoc
     */
    protected array $requiredParams = ItemInterface::REQUIRED_PARAMS;

    /**
     * @var \Silvertree\Ga4\CustomParamsInterface
     */
    protected $customParams;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        $this->customParams = new \Silvertree\Ga4\CustomParams();
        parent::__construct();
    }

    /**
     * @inheritDoc
     */
    public function setItemId(string $itemId): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_ID, $itemId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemId(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_ID);
    }

    /**
     * @inheritDoc
     */
    public function setItemName(string $name): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemName(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setAffiliation(string $affiliation): ItemInterface
    {
        $this->offsetSet(ItemInterface::AFFILIATION, $affiliation);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getAffiliation(): string
    {
        return (string)$this->offsetGet(ItemInterface::AFFILIATION);
    }

    /**
     * @inheritDoc
     */
    public function setCoupon(string $coupon): ItemInterface
    {
        $this->offsetSet(ItemInterface::COUPON, $coupon);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCoupon(): string
    {
        return (string)$this->offsetGet(ItemInterface::COUPON);
    }

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): ItemInterface
    {
        $this->offsetSet(ItemInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(ItemInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setDiscount(float $discount): ItemInterface
    {
        $this->offsetSet(ItemInterface::DISCOUNT, $discount);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getDiscount(): float
    {
        return (float)$this->offsetGet(ItemInterface::DISCOUNT);
    }

    /**
     * @inheritDoc
     */
    public function setIndex(int $index): ItemInterface
    {
        $this->offsetSet(ItemInterface::INDEX, $index);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getIndex(): int
    {
        return (int)$this->offsetGet(ItemInterface::INDEX);
    }

    /**
     * @inheritDoc
     */
    public function setItemBrand(string $brand): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_BRAND, $brand);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemBrand(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_BRAND);
    }

    /**
     * @inheritDoc
     */
    public function setItemCategoryOne(string $category): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_CATEGORY_ONE, $category);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemCategoryOne(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_CATEGORY_ONE);
    }

    /**
     * @inheritDoc
     */
    public function setItemCategoryTwo(string $category): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_CATEGORY_TWO, $category);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemCategoryTwo(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_CATEGORY_TWO);
    }

    /**
     * @inheritDoc
     */
    public function setItemCategoryThree(string $category): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_CATEGORY_THREE, $category);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemCategoryThree(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_CATEGORY_THREE);
    }

    /**
     * @inheritDoc
     */
    public function setItemCategoryFour(string $category): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_CATEGORY_FOUR, $category);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemCategoryFour(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_CATEGORY_FOUR);
    }

    /**
     * @inheritDoc
     */
    public function setItemCategoryFive(string $category): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_CATEGORY_FIVE, $category);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemCategoryFive(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_CATEGORY_FIVE);
    }

    /**
     * @inheritDoc
     */
    public function setItemListId(string $listId): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_LIST_ID, $listId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemListId(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_LIST_ID);
    }

    /**
     * @inheritDoc
     */
    public function setItemListName(string $name): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_LIST_NAME, $name);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemListName(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_LIST_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setItemVariant(string $variant): ItemInterface
    {
        $this->offsetSet(ItemInterface::ITEM_VARIANT, $variant);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemVariant(): string
    {
        return (string)$this->offsetGet(ItemInterface::ITEM_VARIANT);
    }

    /**
     * @inheritDoc
     */
    public function setLocationId(string $locationId): ItemInterface
    {
        $this->offsetSet(ItemInterface::LOCATION_ID, $locationId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLocationId(): string
    {
        return (string)$this->offsetGet(ItemInterface::LOCATION_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPrice(float $price): ItemInterface
    {
        $this->offsetSet(ItemInterface::PRICE, $price);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPrice(): float
    {
        return (float)$this->offsetGet(ItemInterface::PRICE);
    }

    /**
     * @inheritDoc
     */
    public function setQuantity(float $quantity): ItemInterface
    {
        $this->offsetSet(ItemInterface::QUANTITY, $quantity);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getQuantity(): float
    {
        return (float)$this->offsetGet(ItemInterface::QUANTITY);
    }

    /**
     * @inheritdoc
     */
    public function addCustomParam(
        string $key,
        $value
    ): ItemInterface {
        $this->customParams->addParam($key, $value);
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCustomParam(
        string $key
    ) {
        return $this->customParams->getParam($key);
    }

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        $customParams = $this->customParams->toItemArray();

        if (!empty($customParams)) {
            $this->data = array_merge($this->data, $customParams);
        }

        return $this->data;
    }
}