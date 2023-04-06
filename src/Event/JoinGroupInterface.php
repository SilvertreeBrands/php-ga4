<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

interface JoinGroupInterface extends \Silvertree\Ga4\EventInterface
{
    public const GROUP_ID = 'group_id';

    public const REQUIRED_PARAMS = [];

    /**
     * Set group ID
     *
     * @param string $groupId
     * @return JoinGroupInterface
     */
    public function setGroupId(string $groupId): JoinGroupInterface;

    /**
     * Get group ID
     *
     * @return string
     */
    public function getGroupId(): string;
}