@extends('backend.master')
@section('content')
<h5 class="text-primary text-center mb-5">Update Banner</h5>
<form action="{{ route('backend.banner.update',$banner->id) }}" method="post" enctype="multipart/form-data"
    class="form-group">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="" class="form-label">Heading <span class="text-danger"><i class="fa fa-asterisk"
                    aria-hidden="true"></i></span></label>
        <input type="text" class="form-control" name="heading" id="heading" aria-describedby="helpId"
            placeholder="Enter Banner Heading">
        <p class="form-text text-danger">
            @error('heading')
            {{ $message }}
            @enderror
        </p>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Description <span class="text-danger"><i class="fa fa-asterisk"
                    aria-hidden="true"></i></span></label>
        <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId"
            placeholder="Enter Banner Description">
        <p class="form-text text-danger">
            @error('description')
            {{ $message }}
            @enderror
        </p>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Banner url <span class="text-danger"><i class="fa fa-asterisk"
                    aria-hidden="true"></i></span></label>
        <input type="url" class="form-control" name="banner_url" id="banner_url" aria-describedby="helpId"
            placeholder="Enter Banner Banner_url">
        <p class="form-text text-danger">
            @error('banner_url')
            {{ $message }}
            @enderror
        </p>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Button Text <span class="text-danger"><i class="fa fa-asterisk"
                    aria-hidden="true"></i></span></label>
        <input type="text" class="form-control" name="button_text" id="button_text" aria-describedby="helpId"
            placeholder="Enter Banner Button_text">
        <p class="form-text text-danger">
            @error('button_text')
            {{ $message }}
            @enderror
        </p>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Image <span class="text-danger"><i class="fa fa-asterisk"
                    aria-hidden="true"></i></span></label>
        <input type="file" class="form-control" name="image" id="image" aria-describedby="helpId"
            placeholder="Enter Banner Image">
        <p class="form-text text-danger">
            @error('image')
            {{ $message }}
            @enderror
        </p>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status <span class="text-danger"><i class="fa fa-asterisk"
                    aria-hidden="true"></i></span></label>
        <select name="status" id="status" class="form-control">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
        <p class="form-text text-danger">
            @error('status')
            {{ $message }}
            @enderror
        </p>
    </div>
    <button class="btn btn-primary">Submit</button>
</form>
@endsection