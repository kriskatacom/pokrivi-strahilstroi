<?php

namespace App\Services;

class OpenGraphService
{
    private array $tags = [];
    private string $siteName = "Страхил Строй";
    private string $defaultImage = "https://pokrivi-strahilstroi.com/assets/images/og-default.jpg";

    public function __construct(array $data = [])
    {
        // Вземаме пълния URL адрес
        $currentUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $this->tags = [
            // Стандартни SEO тагове (За Google)
            'meta_title'       => $data['title'] ?? 'Ремонт на покриви София и Страната - Страхил Строй',
            'meta_description' => $data['description'] ?? 'Професионален ремонт на покриви, хидроизолация и изграждане на нови покриви от Страхил Строй. Гаранция от 7 до 15 години. Ниски цени!',
            'meta_keywords'    => $data['keywords'] ?? 'ремонт на покриви, покривни ремонти, хидроизолация, нови покриви, Страхил Строй',
            'robots'           => $data['robots'] ?? 'index, follow',
            
            // Open Graph (За Facebook, LinkedIn, Viber, Messenger)
            'og_title'         => $data['og_title'] ?? ($data['title'] ?? 'Ремонт на покриви - Страхил Строй'),
            'og_description'   => $data['og_description'] ?? ($data['description'] ?? 'Професионални покривни услуги с гаранция.'),
            'og_url'           => $currentUrl,
            'og_image'         => $data['image'] ?? $this->defaultImage,
            'og_type'          => 'website',
            'og_locale'        => 'bg_BG',

            // Twitter Cards
            'twitter_card'     => 'summary_large_image',
            'twitter_image'    => $data['image'] ?? $this->defaultImage,
        ];
    }

    public function renderTags(): string
    {
        $html = "    \n";
        $html .= "    <title>" . htmlspecialchars($this->tags['meta_title']) . "</title>\n";
        $html .= "    <meta name=\"description\" content=\"" . htmlspecialchars($this->tags['meta_description']) . "\">\n";
        $html .= "    <meta name=\"keywords\" content=\"" . htmlspecialchars($this->tags['meta_keywords']) . "\">\n";
        $html .= "    <meta name=\"robots\" content=\"{$this->tags['robots']}\">\n";
        $html .= "    <link rel=\"canonical\" href=\"{$this->tags['og_url']}\">\n";

        $html .= "\n    \n";
        $html .= "    <meta property=\"og:site_name\" content=\"{$this->siteName}\">\n";
        $html .= "    <meta property=\"og:type\" content=\"{$this->tags['og_type']}\">\n";
        $html .= "    <meta property=\"og:url\" content=\"{$this->tags['og_url']}\">\n";
        $html .= "    <meta property=\"og:title\" content=\"" . htmlspecialchars($this->tags['og_title']) . "\">\n";
        $html .= "    <meta property=\"og:description\" content=\"" . htmlspecialchars($this->tags['og_description']) . "\">\n";
        $html .= "    <meta property=\"og:image\" content=\"{$this->tags['og_image']}\">\n";
        $html .= "    <meta property=\"og:locale\" content=\"{$this->tags['og_locale']}\">\n";

        $html .= "\n    \n";
        $html .= "    <meta name=\"twitter:card\" content=\"{$this->tags['twitter_card']}\">\n";
        $html .= "    <meta name=\"twitter:title\" content=\"" . htmlspecialchars($this->tags['og_title']) . "\">\n";
        $html .= "    <meta name=\"twitter:description\" content=\"" . htmlspecialchars($this->tags['og_description']) . "\">\n";
        $html .= "    <meta name=\"twitter:image\" content=\"{$this->tags['twitter_image']}\">\n";

        return $html;
    }
}
