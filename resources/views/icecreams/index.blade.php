@extends('icecreams.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Menu</h2>
        </div>
        <div class="col-md-6">
            <div class="addItems d-flex justify-content-end">
                <h2>
                    <a href="{{ route('icecreams.create') }}" class="btn btn-primary">Add Items</a>
                </h2>
            </div>
        </div>
    </div>

    <table class="table table-hover" border="1">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Type</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $s_no = 1;
            @endphp

            @foreach ($icecreams as $icecream)
                <tr>
                    <th scope="row">{{ $s_no++ }}</th>
                    <td>{{ $icecream->type }}</td>
                    <td>{{ $icecream->name }}</td>
                    <td>{{ $icecream->description }}</td>
                    <td class="text-center d-flex p-3">
                        <a href="{{ route('icecreams.show', $icecream->id) }}" type="button"
                            class="btn btn-primary mx-1">SHOW</a>
                        <a href="{{ route('icecreams.edit', $icecream->id) }}" type="button"
                            class="btn btn-success mx-1">UPDATE</a>
                        <form action="{{ route('icecreams.destroy', $icecream->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            {{-- <a href="{{ route('icecreams.destroy', $icecream->id) }}" type="button"
                                class="btn btn-danger">DELETE</a> --}}
                            <input type="submit" class="btn btn-danger" name="" id="" value="DELETE">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        var msg = '{{ Session::get('alert') }}';
        var exist = '{{ Session::has('alert') }}';
        if (exist) {
            alert(msg);
        }
    </script>
@endsection
