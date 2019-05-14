<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Client;
use App\Http\Resources\ImageResource;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientId)
    {
        $images = Image::getAllImagesById($clientId);
        return ImageResource::collection($images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input('imageClientId')){
            $clientid = $request->input('imageClientId');
        }else{
            $id = Client::getClientLastId();
            foreach($id as $row){
                $clientid = $row->ClientID + 1;
            }
        }
        $exploded = explode(',',$request->input('imageFile'));
        $decoded = base64_decode($exploded[1]);

        if(str_contains($exploded[0],'jpeg')){
            $extension = 'jpg';
        }else{
            $extension = 'png';
        }
        $fileName = str_random().'.'.$extension;
        mkdir('clientImages/'.$clientid.'/'.$request->input('imageType'),0777,true);
        $path = public_path().'/clientImages/'.$clientid.'/'.$request->input('imageType').'/'.$fileName;

        file_put_contents($path, $decoded);
        $image = new Image;

        $image->ImageID = $request->input('imageId');
        $image->ImageBR_CODE = $request->input('imageBrCode');
        $image->ClientIDimg = $clientid;
        $image->ItemID = null;
        $image->ImageType = $request->input('imageType');
        $image->ImageFileSize = $request->input('imageFileSize');
        $image->ImageFile = $request->input('imageFile');
        $image->ImageRemarks = $fileName;
        $image->ImageDateTimeAdded = $request->input('imageDateTimeAdded'); 

        Image::insertImage(
            $image->ImageID,
            $image->ImageBR_CODE,
            $image->ClientIDimg,
            $image->ItemID,
            $image->ImageType,
            $image->ImageFileSize,
            $image->ImageFile,
            $image->ImageRemarks,
            $image->ImageDateTimeAdded
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    { 
        $files = glob(public_path().'/clientImages/'.$request->input('imageClientId').'/'.$request->input('imageType').'/*');
        foreach($files as $file){
            if(is_file($file)){
                unlink($file);
            }
        }
        $exploded = explode(',',$request->input('imageFile'));
        $decoded = base64_decode($exploded[1]);

        if(str_contains($exploded[0],'jpeg')){
            $extension = 'jpg';
        }else{
            $extension = 'png';
        }
        $fileName = str_random().'.'.$extension;
        $path = public_path().'/clientImages/'.$request->input('imageClientId').'/'.$request->input('imageType').'/'.$fileName;

        file_put_contents($path, $decoded);

        $image = new Image;

        $image->ImageID = $request->input('imageId'); 
        $image->ImageBR_CODE = $request->input('imageBrCode');
        $image->ItemID = null;
        $image->ImageType = $request->input('imageType');
        $image->ImageFileSize = $request->input('imageFileSize');
        $image->ImageFile = $fileName;
        $image->ImageRemarks = $fileName;
        $image->ImageDateTimeAdded = $request->input('imageDateTimeAdded');
        
        Image::updateImage(
            $image->ImageID,
            $image->ImageBR_CODE,
            $image->ItemID,
            $image->ImageType,
            $image->ImageFileSize,
            $image->ImageFile,
            $image->ImageRemarks,
            $image->ImageDateTimeAdded
        );

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
