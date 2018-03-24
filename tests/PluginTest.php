<?php

namespace Phile\Plugin\Phile\XmlSitemap;

use Phile\Core\Config;
use Phile\Core\Event;
use Phile\Test\TestCase;

class PluginTest extends TestCase
{
    public function testSitemap()
    {
        $config = new Config([
            'plugins' => [
                'phile\\xmlsitemap' => [
                    'active' => true
                ]
            ]
        ]);

        $core = $this->createPhileCore(null, $config);
        $request = $this->createServerRequestFromArray(['REQUEST_URI' => '/sitemap.xml']);
        $response = $this->createPhileResponse($core, $request);

        $this->assertStringStartsWith(
            '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/',
            (string)$response->getBody()
        );
    }
}
