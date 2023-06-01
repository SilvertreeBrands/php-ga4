<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

class GenerateLead extends AbstractEvent implements GenerateLeadInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'generate_lead';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = GenerateLeadInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setCurrency(string $currency): GenerateLeadInterface
    {
        $this->offsetSet(GenerateLeadInterface::CURRENCY, $currency);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): string
    {
        return (string)$this->offsetGet(GenerateLeadInterface::CURRENCY);
    }

    /**
     * @inheritDoc
     */
    public function setValue(float $value): GenerateLeadInterface
    {
        $this->offsetSet(GenerateLeadInterface::VALUE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getValue(): float
    {
        return (float)$this->offsetGet(GenerateLeadInterface::VALUE);
    }
}