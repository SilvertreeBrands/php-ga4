<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

class Share extends AbstractEvent implements ShareInterface
{
    public const EVENT_NAME = 'share';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = ShareInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setMethod(string $method): ShareInterface
    {
        $this->offsetSet(ShareInterface::METHOD, $method);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return (string)$this->offsetGet(ShareInterface::METHOD);
    }

    /**
     * @inheritDoc
     */
    public function setContentType(string $type): ShareInterface
    {
        $this->offsetSet(ShareInterface::CONTENT_TYPE, $type);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getContentType(): string
    {
        return (string)$this->offsetGet(ShareInterface::CONTENT_TYPE);
    }

    /**
     * @inheritDoc
     */
    public function setItemId(string $itemId): ShareInterface
    {
        $this->offsetSet(ShareInterface::ITEM_ID, $itemId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getItemId(): string
    {
        return (string)$this->offsetGet(ShareInterface::ITEM_ID);
    }
}