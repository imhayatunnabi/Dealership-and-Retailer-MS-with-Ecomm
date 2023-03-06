@extends('backend.master')
@section('content')
<a href="{{ route('backend.banner.create') }}" class="btn btn-primary">Create Banner</a>
<div class="table-responsive mt-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $key=>$item)
            <tr class="">
                <td scope="row">{{ $key }}</td>
                <td>{{ $item->heading }}</td>
                <td>{{ $item->banner_url }}</td>
                <td>{{ $item->image }}</td>
                <td>
                    <a href="{{ route('backend.banner.edit',$item->id) }}" class="btn btn-primary"><i
                            class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    <a href="{{ route('backend.banner.destroy',$item->id) }}" class="btn btn-primary"><i
                            class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
