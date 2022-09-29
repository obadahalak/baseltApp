<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SiteinfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $office = [

                'mainOffice' => [
                    'name' => 'OfficeMainName',
                    'long' => '222',
                    'lat' => '333'
                ],
                'sectionOffice' => [
                    'name' => 'OfficeSectionName',
                    'long' => '222',
                    'lat' => '333'
            ]
        ];

        $office_ar = [

            'mainOffice' => [
                'name' => 'OfficeMainName',
                'long' => '222',
                'lat' => '333'
            ],
            'sectionOffice' => [
                'name' => 'OfficeSectionName',
                'long' => '222',
                'lat' => '333'
            ]
        ];
        $links=[

            'facebook'=>'http://www.facebook.com',
            'instagram'=>'http://www.instagram.com',
            'youtube'=>'http://www.youtube.com',

        ];

        return [
            'office' => $office,
            'office_ar' =>$office_ar,
            'phone' => '12312333',
            'fax' => '123123',
            'email' => fake()->email(),
            'links'=>$links,
            'about_us'=>fake()->text(300),
            'about_us_ar'=>fake()->text(300),
        ];
    }
}
