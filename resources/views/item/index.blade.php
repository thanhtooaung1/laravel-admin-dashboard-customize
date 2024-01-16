@extends('dashboard.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (@session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ @session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @elseif (@session('update'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ @session('update') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @elseif (@session('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ @session('delete') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @elseif (@session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ @session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
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
                                    <th scope="col">Expire Date</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->expire_date }}</td>
                                        <td>
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
                                        </td>
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
