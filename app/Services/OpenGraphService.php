<?php

namespace App\Services;

class OpenGraphService
{
    private array $tags = [];
    private string $siteName = "Моят Бранд";

    public function __construct(array $data = [])
    {
        $this->tags = [
            'title'       => $data['title'] ?? 'Начало',
            'description' => $data['description'] ?? 'Добре дошли в нашия сайт.',
            'url'         => (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
            'image'       => $data['og_image'] ?? 'https://yourdomain.com/default-og.jpg',
            'type'        => 'website'
        ];
    }

    public function renderTags(): string
    {
        $html = "\n    \n";
        $html .= "    <meta property=\"og:site_name\" content=\"{$this->siteName}\">\n";

        foreach ($this->tags as $property => $value) {
            $content = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            $html .= "    <meta property=\"og:{$property}\" content=\"{$content}\">\n";
        }

        $html .= "    <meta name=\"twitter:card\" content=\"summary_large_image\">\n";
        $html .= "    <meta name=\"twitter:title\" content=\"" . htmlspecialchars($this->tags['title']) . "\">\n";

        return $html;
    }
}
