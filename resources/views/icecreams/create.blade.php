@extends('icecreams.layout')

@section('content')
    <form style="margin-top: 100px" method="post" action={{ route('icecreams.store') }}>
        <div class="row mb-3">
            <label for="type" class="col-md-2 col-form-label">Type</label>
            <div class="col-md-10">
                <input type="text" class=" form-control" id="type" name="type">
            </div>
        </div>
        <div class="row mb-3">
            <label for="name" class="col-md-2 col-form-label">Name</label>
            <div class="col-md-10">
                <input type="text" class=" form-control" id="name" name="name">
            </div>
        </div>
        <div class="row mb-3 ">
            <label class="col-md-2 col-form-label" for="description">Description</label>
            <div class="col-md-10">
                <input type="textarea" class=" form-control" id="description" name="description">
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
            <div class="col-md-6 justify-content-end d-flex">
                <a href="{{ route('icecreams.index') }}" class="btn btn-primary">BACK</a>
            </div>
        </div>
    </form>
@endsection
