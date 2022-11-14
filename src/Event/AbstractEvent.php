<?php
declare(strict_types=1);

namespace Silvertree\PhpGa4\Event;

abstract class AbstractEvent implements \ArrayAccess
{
    /**
     * @var array
     */
    protected array $data = [];

    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value): void
    {
        $this->data[$offset] = $value;
    }

    /**
     * @inheritDoc
     */
    public function offsetGet($offset)
    {
        if ('' === $offset) {
            return $this->data;
        }

        return $this->data[$offset] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }

    /**
     * @inheritDoc
     */
    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]) || array_key_exists($offset, $this->data);
    }

    /**
     * Convert to JSON string
     *
     * @return string|bool
     */
    public function toJson()
    {
        return json_encode($this->data);
    }
}