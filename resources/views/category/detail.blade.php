@extends('dashboard.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-dark">
                        <a href="{{ route('category.index') }}" class="btn btn-dark"><i class="fas fa-arrow-left"></i></a>
                        Category Detail
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="fw-bold fs-4">Category Name</div>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-6">{{ $category->name }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
