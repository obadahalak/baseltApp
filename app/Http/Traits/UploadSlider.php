<?php

namespace App\Http\Traits;

use App\Http\Helper\TypesOfslider;


trait  UploadSlider {


    public function UploadSlider( $type){

        dd($type);
        // $images->store($type.'/sliderImages','public');
    }
}
