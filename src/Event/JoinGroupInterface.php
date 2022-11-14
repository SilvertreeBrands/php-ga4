<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

interface JoinGroupInterface
{
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