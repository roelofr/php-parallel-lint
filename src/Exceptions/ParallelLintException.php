<?php
namespace PhpParallelLint\PhpParallelLint\Exceptions;

class ParallelLintException extends \Exception implements \JsonSerializable
{
    public function jsonSerialize()
    {
        return array(
            'type' => get_class($this),
            'message' => $this->getMessage(),
            'code' => $this->getCode(),
        );
    }
}
