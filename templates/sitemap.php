<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages as $page) : ?>
        <url>
            <loc><?= $page['loc'] ?></loc>
            <lastmod><?= $page['lastmod'] ?></lastmod>
        </url>
    <?php endforeach ?>
</urlset>