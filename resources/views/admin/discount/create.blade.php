@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-3">
                <div class="card-header ">
                    Tambah Discount
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.discount.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="" class="form-label {{ $errors->has('name') ? 'is-invalid' : '' }}">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">   
                            @if ($errors->has('name'))
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            @endif 
                        </div>    

                        <div class="form-group mb-4">
                            <label for="" class="form-label {{ $errors->has('code') ? 'is-invalid' : '' }}">Code</label>
                            <input type="text" class="form-control" name="code" value="{{ old('code') }}">    
                            @if ($errors->has('code'))
                                <p class="text-danger">{{ $errors->first('code') }}</p>
                            @endif
                        </div>  

                        <div class="form-group mb-4">
                            <label for="" class="form-label {{ $errors->has('description') ? 'is-invalid' : '' }}">Description</label>
                            <textarea name="description" cols="0" rows="2" class="form-control">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            @endif
                        </div>  

                        <div class="form-group mb-4">
                            <label for="" class="form-label {{ $errors->has('percentage') ? 'is-invalid' : '' }}">Discount Percentage</label>
                            <input type="number" class="form-control" name="percentage" min="1" max="100" value="{{ old('percentage') }}">  
                            @if ($errors->has('percentage'))
                                <p class="text-danger">{{ $errors->first('percentage') }}</p>
                            @endif  
                        </div>  

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection