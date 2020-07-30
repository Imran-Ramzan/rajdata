<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $image_url = 'http://128.199.217.76/staging/frontend/CALLA739-1.jpg';
        // $image_url = '<img src="/images/' . $new_name . '" class="img-thumbnail" width="500" />';
        $api_credentials = array(
            'key' => 'acc_eab9b92d8eed69f',
            'secret' => '8c3302c03333b4aa0df3dcb5446ec23a'
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.imagga.com/v2/tags?image_url=' . $image_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_USERPWD, $api_credentials['key'] . ':' . $api_credentials['secret']);

        $response = curl_exec($ch);
        curl_close($ch);
        $json_response = json_decode($response);
        $res = $json_response->result->tags;
        return view('frontend.pages.home', ['res' => $res]);
    }

    function action(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240'
        ]);
        if ($validation->passes()) {
            $image = $request->file('select_file');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            return response()->json([
                'message'   => 'Image Upload Successfully',
                'uploaded_image' => '<img src="/images/' . $new_name . '" class="img-thumbnail" width="500" />',
                'class_name'  => 'alert-success'
            ]);
        } else {
            return response()->json([
                'message'   => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name'  => 'alert-danger'
            ]);
        }
    }

    public function carpet()
    {

        return view('frontend.pages.carpet');
    }
    public function wallpaper()
    {

        return view('frontend.pages.wallpaper');
    }
    public function fabrics()
    {

        return view('frontend.pages.fabrics');
    }
}
