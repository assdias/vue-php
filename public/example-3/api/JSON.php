<?php

/**
 * Class Database
 */
class JSON
{
    /**
     * @var string
     */
    private $filename;

    /**
     * Router constructor.
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        if (!file_exists($filename)) {
            file_put_contents($filename, '{}');
        }
        $this->filename = $filename;
    }

    /**
     * @param string $uri
     * @return JSON
     */
    public static function instance(string $uri)
    {
        return new static($uri);
    }

    /**
     * @return array
     */
    public function read()
    {
        return json_decode(file_get_contents($this->filename), true);
    }

    /**
     * @param array $database
     * @return bool|int
     */
    public function write(array $database)
    {
        return file_put_contents($this->filename, json_encode($database, JSON_PRETTY_PRINT));
    }
}