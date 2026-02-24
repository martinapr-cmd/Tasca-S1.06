<?php

class LearningResource
{

    private string $name;
    private Theme $theme;
    private string $url;
    private ResourceType $type;

    public function __construct(string $name, Theme $theme, string $url, ResourceType $type)
    {
        $this->name = $name;
        $this->theme = $theme;
        $this->url = $url;
        $this->type = $type;
    }

    public function toString(): string
    {
        return "Name of the resource: {$this->name}, 
        Theme: {$this->theme->value}, 
        URL: {$this->url}, 
        Type: {$this->type->value}";
    }
}
