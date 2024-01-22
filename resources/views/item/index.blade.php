@extends('dashboard.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @include('layouts.alert')
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="row justify-content-between">
                            Items
                            {{-- <a href="{{ route('item.create') }}" class="btn btn-success"><i class="fas fa-plus"></i></a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Expire Date</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + $items->firstItem() }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>
                                            <img src="{{ $item->getImageUrl() }}" width="50" alt="">
                                        </td>
                                        <td>{{ $item->expire_date ?? '--' }}</td>
                                        <td>
                                            <div class="text-center">
                                                <a class="btn btn-outline-warning"
                                                    href="{{ route('item.edit', $item->id) }}"><i
                                                        class="fas fa-pen"></i></a>
                                                <a class="btn btn-outline-info"
                                                    href="{{ route('item.show', $item->id) }}"><i
                                                        class="fas fa-info"></i></a>

                                                <form action="{{ route('item.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return confirm('Are you sure to delete?')"
                                                        class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="row justify-content-end">
                    {{ $items->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection
