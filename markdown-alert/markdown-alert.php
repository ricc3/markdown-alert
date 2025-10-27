<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class MarkdownInfoPlugin
 * @package Grav\Plugin
 */
class MarkdownAlertPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPageContentRaw' => ['onPageContentRaw', 0],
        ];
    }

    public function onPageContentRaw(Event $event)
    {
        $page = $event['page'];
        $content = $page->getRawContent();
        
        // Znajdź wszystkie bloki [info]...[/info] i zamień je na HTML
        $content = preg_replace_callback(
            '/\[alert\](.*?)\[\/alert\]/s',
            function($matches) {
                $innerContent = trim($matches[1]);
                
                // Jeśli nie ma zawartości, zwróć pusty div
                if (empty($innerContent)) {
                    return '<div class="alert"></div>';
                }
                
                // Użyj parsera Markdown do przetworzenia zawartości
                $parsedown = new \Parsedown();
                $html = $parsedown->text($innerContent);
                
                // Usuń puste paragrafy
                $html = preg_replace('/<p>\s*<\/p>/', '', $html);
                
                return '<div class="alert">' . $html . '</div>';
            },
            $content
        );
        
        $page->setRawContent($content);
    }
}


