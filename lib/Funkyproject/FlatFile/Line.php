<?php

namespace Funkyproject\FlatFile;

class Line
{
    private $config;
    private $content;

    public function __construct($content, ConfigYml $config)
    {
        $this->config = $config;
        $this->content = $content;
    }

    public function get($key)
    {
        $config = $this->config->get($key);
        return trim(substr($this->content, $config['pos'] - 1, $config['length']));
    }

}