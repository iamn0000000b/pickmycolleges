<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'application_name',
                'value' => 'Welcome to the Lorem Ipsum',
            ],
            [
                'key' => 'header_logo',
                'value' => null,
            ],
            [
                'key' => 'footer_logo',
                'value' => null,
            ],
            [
                'key' => 'favicon',
                'value' => null,
            ],
            [
                'key' => 'header_text',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod',
            ],
            [
                'key' => 'footer_text',
                'value' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.',
            ],
            [
                'key' => 'contact_address',
                'value' => '7692 S Cottonwood Mountain, Littleton, Colorado 80127,United States of America',
            ],
            [
                'key' => 'contact_email',
                'value' => 'support@xyz.com',
            ],
            [
                'key' => 'contact_phone',
                'value' => '+91 9874444000',
            ],
            [
                'key' => 'contact_phone_optional',
                'value' => '+91- 9874560001',
            ],
            [
                'key' => 'meta_title',
                'value' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'key' => 'meta_description',
                'value' => 'Lorem ipsum dolor sit amet',
            ],
            [
                'key' => 'meta_keywords',
                'value' => 'Lorem,ipsum,dolor,sit,amet',
            ],
            [
                'key' => 'facebook_url',
                'value' => '#',
            ],
            [
                'key' => 'twitter_url',
                'value' => '#',
            ],
            [
                'key' => 'linkedin_url',
                'value' => '#',
            ],
            [
                'key' => 'instagram_url',
                'value' => '#',
            ],
            [
                'key' => 'youtube_url',
                'value' => '#',
            ],
            [
                'key' => 'copyright',
                'value' => 'Copyright © '.date('Y').' All rights reserved.',
            ],
        ];

        foreach ($settings as $key => $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}
