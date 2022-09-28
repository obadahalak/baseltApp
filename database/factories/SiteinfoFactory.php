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
                    'lan' => '222',
                    'lat' => '333'
                ],
                'sectionOffice' => [
                    'name' => 'OfficeSectionName',
                    'lan' => '222',
                    'lat' => '333'


            ]
        ];
        $links=[

            'facebook'=>'http://www.facebook.com',
            'instagram'=>'http://www.instagram.com',
            'youtube'=>'http://www.youtube.com',

        ];


        return [
            'office' => json_encode($office),
            'phone' => '12312333',
            'fax' => '123123',
            'email' => fake()->email(),
            'links'=>json_encode($links),
            'about_us'=>fake()->text(300),
        ];
    }
}
