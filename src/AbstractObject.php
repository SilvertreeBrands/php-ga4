<?php
declare(strict_types=1);

namespace Silvertree\Ga4;

abstract class AbstractObject implements \ArrayAccess
{
    /**
     * @var string
     */
    public string $eventName = '';

    /**
     * @var array
     */
    protected array $data = [];

    /**
     * @var array
     */
    protected array $requiredParams = [];

    /**
     * @var string
     */
    protected string $eventNamePrefix = '';

    /**
     * @var string
     */
    protected string $eventNameKey = 'event';

    /**
     * @var string
     */
    protected string $eventParamsKey = '';

    /**
     * @var array
     */
    protected array $customEventParams = [];

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
     * Convert to array
     *
     * @return array
     */
    public function toArray(): array
    {
        $dataArr = [
            $this->eventNameKey => $this->eventNamePrefix . $this->eventName
        ];

        if (!empty($this->customEventParams)) {
            $dataArr['customerEventParams'] = $this->customEventParams;
        }

        foreach ($this->data as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $obj) {
                    if ($obj instanceof \Silvertree\Ga4\ItemInterface) {
                        if ($this->eventParamsKey) {
                            $dataArr[$this->eventParamsKey][$key][] = $obj->offsetGet();
                        } else {
                            $dataArr[$key][] = $obj->offsetGet();
                        }
                    }
                }
            } else {
                if ($this->eventParamsKey) {
                    $dataArr[$this->eventParamsKey][$key] = $value;
                } else {
                    $dataArr[$key] = $value;
                }
            }
        }

        return $dataArr;
    }

    /**
     * Convert to JSON string
     *
     * @return string|bool
     */
    public function toJson(): array
    {
        return json_encode($this->toArray());
    }

    /**
     * Add item
     *
     * @param \Silvertree\Ga4\ItemInterface $item
     * @param string $key
     *
     * @return AbstractObject
     */
    public function addItem(
        \Silvertree\Ga4\ItemInterface $item,
        string $key
    ): AbstractObject {
        if (method_exists($this, 'setItems')) {
            $identifier = $item->getItemId();

            if (!$identifier) {
                $identifier = $item->getItemName();
            }

            $this->data[$key][$identifier] = $item;
        }

        return $this;
    }

    /**
     * Set event name prefix
     *
     * @param string $prefix
     *
     * @return AbstractObject
     */
    public function setEventNamePrefix(
        string $prefix
    ): AbstractObject {
        $this->eventNamePrefix = $prefix;
        return $this;
    }

    /**
     * Set event name key
     *
     * @param string $key
     *
     * @return AbstractObject
     */
    public function setEventNameKey(
        string $key
    ): AbstractObject {
        $this->eventNameKey = $key;
        return $this;
    }

    /**
     * Set event params key
     *
     * @param string $key
     *
     * @return AbstractObject
     */
    public function setEventParamsKey(
        string $key
    ): AbstractObject {
        $this->eventParamsKey = $key;
        return $this;
    }

    /**
     * Add custom event params
     *
     * @param array $params
     *
     * @return AbstractObject
     */
    public function addCustomEventParams(
        array $params = []
    ): AbstractObject {
        $this->customEventParams = $params;
        return $this;
    }
}