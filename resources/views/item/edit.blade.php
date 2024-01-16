@extends('dashboard.index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark">
                        <a href="{{ route('item.index') }}" class="btn btn-dark"><i class="fas fa-arrow-left"></i></a>
                        Update Item
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('item.update', $item->id) }}">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <small class="text-danger">*</small></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $item->name) }}"
                                    placeholder="Enter item name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price <small class="text-danger">*</small></label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                    id="price" name="price" value="{{ old('price', $item->price) }}"
                                    placeholder="Enter price">
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category <small
                                        class="text-danger">*</small></label>
                                <select name="category_id" id="category" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($category->id == old('category_id', $item->category->id)) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="expire_date" class="form-label">Expire Date <small
                                        class="text-danger">*</small></label>
                                <input type="date" class="form-control @error('expire_date') is-invalid @enderror"
                                    id="expire_date" name="expire_date" value="{{ old('expire_date', $item->expire_date) }}"
                                    placeholder="Enter price">
                                @error('expire_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
