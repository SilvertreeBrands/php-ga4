<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

abstract class AbstractObject implements \ArrayAccess
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
     * @inheritdoc
     */
    public function offsetSet($offset, $value): void
    {
        $this->data[$offset] = $value;
    }

    /**
     * @inheritdoc
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
     * @inheritdoc
     */
    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]) || array_key_exists($offset, $this->data);
    }

    /**
     * Cleanup
     *
     * Remove empty values from data array
     *
     * @return void
     */
    public function cleanup(): void
    {
        foreach ($this->data as $key => $value) {
            if (!$value) {
                unset($this->data[$key]);
            }
        }
    }

    /**
     * Convert to JSON string
     *
     * @return string|bool
     */
    public function toJson(): ?string
    {
        return json_encode($this->toArray(), JSON_PRESERVE_ZERO_FRACTION);
    }

    /**
     * Convert to array
     *
     * @return array
     */
    abstract public function toArray(): array;
}
