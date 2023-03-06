<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use App\Repository\BannerRepository;
use Illuminate\Http\RedirectResponse;
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
        $slug = Str::slug($request->name,'-');
        $count = Banner::where('slug', $slug)->count();
        if($count){
            $slug = $slug . '-' . ($count + 1);
        }
        $image = null;
        if($request->hasFile('image')){
            $image = date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/banner', $image);
        }
        $data = [
            'name'=> $request->name,
            'slug'=> $slug,
            'status'=> $request->status,
            'image'=> $image,
        ];
        $this->bannerRepository->create($data);
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
            'name'=> $request->name,
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