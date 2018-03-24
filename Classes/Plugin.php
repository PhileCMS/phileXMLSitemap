<?php
/**
 * Plugin class
 */
namespace Phile\Plugin\Phile\XmlSitemap;

use Phile\Core\Container;
use Phile\Gateway\EventObserverInterface;
use Phile\Plugin\AbstractPlugin;
use Phile\Repository\Page as Repository;

/**
 * XML Sitemap Plugin
 */
class Plugin extends AbstractPlugin implements EventObserverInterface
{
    protected $events = ['request_uri' => 'createSitemap'];

    public function createSitemap($data)
    {
        if ($data['uri'] !== 'sitemap.xml') {
            return;
        }

        $router = Container::getInstance()->get('Phile_Router');

        $templateVars = ['pages' => []];
        $pages = (new Repository)->findAll();
        foreach ($pages as $page) {
            $templateVars['pages'][] = [
                'loc' => $router->urlForPage($page->getPageId()),
                'lastmod' => strftime('%Y-%m-%d', filemtime($page->getFilePath())),
            ];
        }
        $content = $this->renderFile('templates/sitemap.php', $templateVars);

        $response = (new \Phile\Core\Response)
            ->createHtmlResponse($content)
            ->withHeader('Content-Type', 'application/xml; charset=UTF-8');
        $data['response'] = $response;
    }

    private function renderFile(string $filename, array $vars = []): string
    {
        extract($vars);
        ob_start();
        include $this->getPluginPath($filename);
        return ob_get_clean();
    }
}
