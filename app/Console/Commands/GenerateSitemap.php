<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Modules\Product\Models\Product;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the website';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // Add static pages
        $sitemap->add(Url::create('/')->setPriority(1.0));
        $sitemap->add(Url::create('/about'));
        $sitemap->add(Url::create('/contact'));
        $sitemap->add(Url::create('/terms-of-service'));
        $sitemap->add(Url::create('/ask'));

        // Add dynamic pages, for example products
        Product::all()->each(function($product) use ($sitemap) {
            $slug = rawurlencode($product->name.' '.$product->product_code);
            $imageUrl = str_replace(' ', '%20', $product->main_image);
            $sitemap->add(Url::create("/product/{$product->id}/".$slug)
                ->setLastModificationDate($product->updated_at)
                ->setPriority(0.9)
                ->setChangeFrequency('weekly')
                ->addImage($imageUrl,'','', $product->name)
            );
        });

        // Save sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}
