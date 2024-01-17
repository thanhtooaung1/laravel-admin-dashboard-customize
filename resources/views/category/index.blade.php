@extends('dashboard.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                @include('layouts.alert')
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="row justify-content-between">
                            Categories

                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <div class="text-center">
                                                <a class="btn btn-outline-warning"
                                                    href="{{ route('category.edit', $category->id) }}"><i
                                                        class="fas fa-pen"></i></a>
                                                {{-- <a class="btn btn-info"
                                                    href="{{ route('category.show', $category->id) }}"><i
                                                        class="fas fa-info"></i></a> --}}

                                                @if ($category->items->isEmpty())
                                                    <form action="{{ route('category.destroy', $category->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            onclick="return confirm('Are you sure to delete?')"
                                                            class="btn btn-outline-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                @endif

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
