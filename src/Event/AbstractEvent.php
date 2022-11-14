<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

abstract class AbstractEvent implements \ArrayAccess
{
    /**
     * @var array
     */
    protected array $data = [];

    /**
     * @var array
     */
    protected array $requiredParams = [];

    /**
     * Construct
     */
    public function __construct()
    {
        // Prepare and set default values
        foreach ($this->requiredParams as $requiredParam) {
            $methodName = str_replace(' ', '', ucwords(str_replace('_', ' ', $requiredParam)));
            $getter = 'get' . $methodName;
            $setter = 'set' . $methodName;

            if (method_exists($this, $getter) && method_exists($this, $setter)) {
                $this->$setter($this->$getter());
            }
        }
    }

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
    public function offsetGet($offset = '')
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