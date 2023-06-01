<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

interface EventInterface
{
    /**
     * Set event name prefix
     *
     * @param string $prefix
     *
     * @return EventInterface
     */
    public function setEventNamePrefix(string $prefix): EventInterface;

    /**
     * Set event name key
     *
     * @param string $key
     *
     * @return EventInterface
     */
    public function setEventNameKey(string $key): EventInterface;

    /**
     * Set event params key
     *
     * @param string $key
     *
     * @return EventInterface
     */
    public function setEventParamsKey(string $key): EventInterface;

    /**
     * Add custom param
     *
     * @param string $key
     * @param mixed $value
     *
     * @return EventInterface
     */
    public function addCustomParam(string $key, $value): EventInterface;
}
