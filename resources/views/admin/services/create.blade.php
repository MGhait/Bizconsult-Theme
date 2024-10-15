@extends('admin.master')

@section('title', __('keywords.add_new_service'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.add_new_service') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="simpleinput">{{ __('keywords.title') }}</label>
                            <input type="text" id="simpleinput" name="title" class="form-control" placeholder="{{ __('keywords.title') }}" value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="simpleinput">{{ __('keywords.icon') }}</label>
                            <input type="text" id="simpleinput" class="form-control" name="icon" placeholder="{{ __('keywords.icon') }}" value="{{ old('icon') }}">
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="simpleinput">{{ __('keywords.description') }}</label>
                            <textarea id="simpleinput" class="form-control" name="description" placeholder="{{ __('keywords.description') }}">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-sm mt-3">{{ __('keywords.submit') }}</button>
                </form>
              </div>
            </div>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@endsection