phileXMLSitemap
===============

[Phile](https://github.com/PhileCMS/Phile) plugin to generate a XML sitemap

### 1.1 Installation (composer)
```
php composer.phar require phile-cms/plugin-xmlsitemap:dev-master
```

### 1.2 Installation (Download)

* Install [Phile](https://github.com/PhileCMS/Phile)
* Download this repo and drop the content into a new folder `xmlsitemap` under the _Phile plugin directory_

### 2. Activate plugin

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins']['xmlsitemap'] = array('active' => true);
```

Now, you can access the sitemap under the URL `http://your-domain.com/sitemap.xml`. If you installed Phile into a subdirectory your sitemap.xml is located under your subdirectory/sitemap.xml
