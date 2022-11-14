<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

class JoinGroup extends AbstractEvent implements JoinGroupInterface
{
    public const EVENT_NAME = 'join_group';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = JoinGroupInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setGroupId(string $groupId): JoinGroupInterface
    {
        $this->offsetSet(JoinGroupInterface::GROUP_ID, $groupId);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getGroupId(): string
    {
        return (string)$this->offsetGet(JoinGroupInterface::GROUP_ID);
    }
}