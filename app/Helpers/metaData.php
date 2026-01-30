<?php

namespace App\Helpers;

class MetaData
{
    public string $title = '';
    public string $description = '';
    public string $keywords = '';
    public string $author = '';
    public string $publisher = '';
    public string $copyright = '';
    public string $page_topic = '';
    public string $page_type = '';
    public string $audience = '';

    // Open Graph
    public string $og_site_name = '';
    public string $og_title = '';
    public string $og_description = '';
    public string $og_image = '';
    public string $og_url = '';
    public string $twitter_card = '';
    public string $twitter_image_alt = '';

    public function setAttribute(string $name, $value): self
    {
        $this->$name = $value;
        return $this;
    }

    public function generate(): array
    {
        return (array) $this;
    }
}
