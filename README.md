phileXMLSitemap
===============

[Phile](https://github.com/PhileCMS/Phile) plugin to generate a XML sitemap

### Installation

* Install [Phile](https://github.com/PhileCMS/Phile)
* Download this repo and drop the plugin folder `phileXMLSitemap` it into the _Phile plugin directory_

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins']['phileXMLSitemap'] = array('active' => true);
```

Now, you can access the sitemap under the URL `http://your-domain.com/sitemap.xml`. If you installed Phile into a subdirectory your sitemap.xml is located under your subdirectory/sitemap.xml