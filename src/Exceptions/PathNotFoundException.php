<?php
namespace PhpParallelLint\PhpParallelLint\Exceptions;

class PathNotFoundException extends ParallelLintException
{
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
        $this->message = "Path '$path' not found";
    }

    public function getPath()
    {
        return $this->path;
    }
}
