<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class SelectContent extends AbstractEvent implements SelectContentInterface
{
    public const EVENT_NAME = 'select_content';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = SelectContentInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setContentType(string $type): SelectContentInterface
    {
        $this->offsetSet(SelectContentInterface::CONTENT_TYPE, $type);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getContentType(): string
    {
        return (string)$this->offsetGet(SelectContentInterface::CONTENT_TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setItemId(string $itemId): SelectContentInterface
    {
        $this->offsetSet(SelectContentInterface::ITEM_ID, $itemId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemId(): string
    {
        return (string)$this->offsetGet(SelectContentInterface::ITEM_ID);
    }
}