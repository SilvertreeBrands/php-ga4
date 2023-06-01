<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

abstract class AbstractEvent extends \Silvertree\Ga4\AbstractObject implements \Silvertree\Ga4\EventInterface
{
    /**
     * @var string
     */
    public string $eventName = '';

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
     * @var \Silvertree\Ga4\CustomParamsInterface
     */
    protected $customParams;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        $this->customParams = new \Silvertree\Ga4\CustomParams();
        parent::__construct();
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

        $customParams = $this->customParams->toArray();

        if (!empty($customParams)) {
            $dataArr = array_merge($dataArr, $customParams);
        }

        $this->cleanup();
        foreach ($this->data as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $obj) {
                    if ($obj instanceof \Silvertree\Ga4\ItemInterface) {
                        $obj->cleanup();

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
     * Add item
     *
     * @param \Silvertree\Ga4\ItemInterface $item
     * @param string $key
     *
     * @return AbstractEvent
     */
    public function addItem(
        \Silvertree\Ga4\ItemInterface $item,
        string        $key
    ): AbstractEvent {
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
     * Add items to existing items set
     *
     * @param array $items
     *
     * @return AbstractEvent
     */
    public function addItems(array $items): AbstractEvent
    {
        if (defined(get_class($this) . '::ITEMS')) {
            foreach ($items as $item) {
                if (!$item instanceof \Silvertree\Ga4\ItemInterface) {
                    continue;
                }

                $this->addItem($item, $this::ITEMS);
            }
        }

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setEventNamePrefix(
        string $prefix
    ): \Silvertree\Ga4\EventInterface {
        $this->eventNamePrefix = $prefix;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setEventNameKey(
        string $key
    ): \Silvertree\Ga4\EventInterface {
        $this->eventNameKey = $key;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setEventParamsKey(
        string $key
    ): AbstractEvent {
        $this->eventParamsKey = $key;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function addCustomParam(
        string $key,
        $value
    ): AbstractEvent {
        $this->customParams->addParam($key, $value);
        return $this;
    }
}
