<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
class SliderSeeder extends Seeder
{
    public function run(): void
    {
        $sliders = [
            [
                'image' => 'sliders/HUT.png',
            ],
            [
                'image' => 'sliders/NEW.png',
            ],
            [
                'image' => 'sliders/LPP.png',
            ],
        ];
        foreach ($sliders as $slider) {
                Slider::create($slider);
        }
    }
}
