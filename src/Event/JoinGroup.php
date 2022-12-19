<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

use Silvertree\Ga4\AbstractObject;

class JoinGroup extends AbstractObject implements JoinGroupInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'join_group';

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