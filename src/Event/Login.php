<?php
declare(strict_types=1);

namespace Silvertree\Ga4\Event;

class Login extends AbstractEvent implements LoginInterface
{
    /**
     * @inheritDoc
     */
    public string $eventName = 'login';

    /**
     * @inheritDoc
     */
    protected array $requiredParams = LoginInterface::REQUIRED_PARAMS;

    /**
     * @inheritDoc
     */
    public function setMethod(string $method): LoginInterface
    {
        $this->offsetSet(LoginInterface::METHOD, $method);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return (string)$this->offsetGet(LoginInterface::METHOD);
    }
}