<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Str;
use App\Http\Repository\BannerRepository;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $bannerRepository;
    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepository=$bannerRepository;
    }

    public function index()
    {
        $banners = Banner::all();
        return view('backend.pages.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        $slug = Str::slug($request->heading);
        $count = Banner::where('slug', $slug)->count();
        if($count){
            $slug = $slug.'_'.$count + 1;
        }
        $image = null;
        if($request->hasFile('image')){
            $image = date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/banner', $image);
        }
        $data = [
            'heading'=> $request->heading,
            'description'=> $request->description,
            'banner_url'=> $request->banner_url,
            'button_text'=> $request->button_text,
            'slug'=> $slug,
            'status'=> $request->status,
            'image'=> $image,
        ];
        $this->bannerRepository->create($data);
        alert()->success('Banner created successfully');
        return to_route('backend.banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('backend.pages.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, $id)
    {
        $banner = Banner::find($id);
        $slug = Str::slug($request->name,'-');
        $count = Banner::where('slug', $slug)->count();
        if($count){
            $slug = $slug . '-' . ($count + 1);
        }
        $image = $banner->image;
        if($request->hasFile('image')){
            $image = date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/banner', $image);
        }
        $data = [
            'heading'=> $request->heading,
            'description'=> $request->description,
            'banner_url'=> $request->banner_url,
            'button_text'=> $request->button_text,
            'slug'=> $slug,
            'status'=> $request->status,
            'image'=> $image,
        ];
        $this->bannerRepository->update($banner,$data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $banner = Banner::find($id)->delete();
        // return to_route();
    }
}