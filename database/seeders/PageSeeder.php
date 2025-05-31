<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::truncate();

        Page::create([
            'title' => 'About Us',
            'slug' => 'about-us',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>',
        ]);

        Page::create([
            'title' => 'Features',
            'slug' => 'features',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>',
        ]);

        Page::create([
            'title' => 'Pricing',
            'slug' => 'pricing',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>',
        ]);

        Page::create([
            'title' => 'Privacy Policy',
            'slug' => 'privacy-policy',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>',
        ]);

        Page::create([
            'title' => 'Terms & Conditions',
            'slug' => 'terms-conditions',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, elit sed tincidunt iaculis, nulla nunc blandit odio, aliquam cursus erat mi eu enim. Pellentesque vel tortor et urna efficitur placerat non ut elit. Sed feugiat hendrerit magna, nec commodo ipsum elementum sed. Suspendisse posuere pharetra congue. Fusce posuere aliquam justo sed ultricies. Praesent rutrum dui augue, eget porta nisi vulputate eget. Curabitur vulputate convallis mi, et efficitur nunc fermentum eu. Sed pulvinar rhoncus quam eu aliquet.</p>',
        ]);
    }
}
