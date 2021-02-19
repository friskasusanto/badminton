<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Galery;
use App\GaleryImg;

class GaleryController extends Controller
{
    public function indexImg ()
    {
        $galery = Galery::all();
        return view('admin.galery.img', compact('galery'));
    }
    public function indexName ()
    {
        $galery = Galery::all();
        return view('admin.galery.name', compact('galery'));
    }
    public function galeryName (Request $request)
    {
        $add = New Galery;
        $add->name = $request->name;
        $add->save();

        $status = 200;
        $message = "Galery Added";
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
    public function img (Request $request)
    {
        $galery = Galery::all();
        // dd($request->photos);

        // if($request->hasFile('photos'))
        // {
        //     $allowedfileExtension=['JPG','PNG', 'JPEG', 'WEBP', 'jpg', 'png', 'jpeg', 'webp'];
        //     $files = $request->file('photos');
        //     // dd($allowedfileExtension);

        //     foreach($files as $file){

        //     $filename = $file->getClientOriginalName();
        //     $extension = $file->getClientOriginalExtension();
        //     $check=in_array($extension,$allowedfileExtension);
        //     // dd($check);

        //         if($check)
        //         {
        //             foreach ($request->photos as $photo) 
        //             {
        //                 // $fileName = $photo;
        //                 // $photo->move(public_path('gallery'));

        //                 $filename = $photo->store('gallery');
        //                 $photo->move(public_path('gallery'), 'gallery/'.$filename);

        //                 GaleryImg::create([
        //                 'galery_id' => $request->name,
        //                 'img' => $filename
        //                 ]);
        //             }

        //         }
        //     }
        // }

        if($request->hasfile('photos'))
         {
            
            foreach($request->file('photos') as $image)
            {
                $imageName= time().'.'.$image->getClientOriginalName();
                $image->move(public_path().'/gallery/', $imageName);  

                GaleryImg::create([
                'galery_id' => $request->name,
                'img' => $imageName
                ]);
            }
         } 

        $galeryImg = GaleryImg::where('galery_id', $request->name)->orderBy('created_at', 'desc')->pluck('img')->first();
        // dd($galeryImg);
        $img = Galery::find($request->name);
        $img->img = $galeryImg;
        $img->save();

        $status = 200;
        $message = "Image Added";
        return redirect()->back()->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
