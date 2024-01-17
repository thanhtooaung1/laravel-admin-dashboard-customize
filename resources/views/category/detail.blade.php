@extends('dashboard.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-dark">
                        <a href="{{ route('category.index') }}" class="btn btn-dark"><i class="fas fa-arrow-left"></i></a>
                        Category : {{ $category->name }}
                    </div>

                    <div class="card-body">
                        {{-- <div class="row">
                            <div class="col-md-5">
                                <div class="fw-bold fs-4">Category Name</div>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">{{ $category->name }}</div>
                        </div> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Expire Date</th>
                                    {{-- <th scope="col" class="text-center">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category->items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        {{-- <td>{{ $item->category->name }}</td> --}}
                                        <td>{{ $item->expire_date ?? '--' }}</td>
                                        {{-- <td>
                                            <div class="text-center">
                                                <a class="btn btn-warning" href="{{ route('item.edit', $item->id) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a class="btn btn-info" href="{{ route('item.show', $item->id) }}"><i
                                                        class="fas fa-info"></i></a>

                                                <form action="{{ route('item.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure to delete?')"
                                                        class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
