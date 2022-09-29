<?php

namespace App\Http\Traits;

use App\Http\Helper\TypesOfslider;


trait  UploadSlider {


    public function UploadSliderImage(TypesOfslider $type, $images){

       $images->store($type.'/sliderImages','public');
    }
}
