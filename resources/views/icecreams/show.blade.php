@extends('icecreams.layout')

@section('content')
    <form style="margin-top: 100px" method="post" action={{ route("icecreams.show", $icecream->id) }}>
    @method('PUT')
        <div class="row mb-3">
            <label for="type" class="col-md-2 col-form-label">Type</label>
            <div class="col-md-10">
            <input type="text" value="{{ $icecream->type }}" class=" form-control" id="type" name="type" disabled readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="name" class="col-md-2 col-form-label">Name</label>
            <div class="col-md-10">
            <input type="text" value="{{ $icecream->name }}" class=" form-control" id="name" name="name" disabled readonly>
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-2 col-form-label" for="description">Description</label>
            <div class="col-md-10">
            <textarea rows="5" class=" form-control p-2" id="description" name="description" disabled readonly>{{ $icecream->description }}</textarea>
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        {{-- <button type="submit" class="btn btn-success">Update</button> --}}
    </form>
    <div class="row">
        <div class="col-md-12 justify-content-end d-flex">
            <a href="{{route('icecreams.index')}}" class="btn btn-primary">BACK</a>
        </div>
    </div>
@endsection
