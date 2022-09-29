<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\Sliders;
use Illuminate\Http\Request;
use App\Http\Traits\UploadSlider;
use App\Http\Helper\TypesOfslider;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\Validator;

class SliderImagesController extends Controller
{
    use UploadSlider;
    public  function  viewSlider(){

        return view('silders');
    }

    public function  UploadSlider(Request $request){


        return $this->UploadSlider(TypesOfslider::Home);
        // $rule=[];

        // $validator=Validator::make($request->all(),$rule);

        // if($validator->fails()){
        //     return $validator->errors()->all();
        // }else{


        // }

    }
}
