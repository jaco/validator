<?php
namespace Ayeo\Validator;

class Error
{
    /**
     * @var string
     */
    private $message;
    /**
     * @var null
     */
    private $value;

    public function __construct(string $message, $value = null)
    {
        $this->message = $message;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null
     */
    public function getValue()
    {
        return $this->value;
    }
}