@extends('icecreams.layout')

@section('content')
    <form style="margin-top: 100px" method="post" action={{ route("icecreams.update", $icecream->id) }}>
    @method('PUT')
        <div class="row mb-3">
            <label for="type" class="col-md-2 col-form-label">Type</label>
            <div class="col-md-10">
            <input type="text" value="{{ $icecream->type }}" class=" form-control" id="type" name="type">
            </div>
        </div>
        <div class="row mb-3">
            <label for="name" class="col-md-2 col-form-label">Name</label>
            <div class="col-md-10">
            <input type="text" value="{{ $icecream->name }}" class=" form-control" id="name" name="name">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-2 col-form-label" for="description">Description</label>
            <div class="col-md-10">
            <input type="textarea" value="{{ $icecream->description }}" class=" form-control" id="description" name="description">
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
