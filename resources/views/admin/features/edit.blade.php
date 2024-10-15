@extends('admin.master')

@section('title', __('keywords.update_feature'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.update_feature') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <form method="POST" action="{{ route('admin.features.update', ['feature' => $feature]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <x-form-label field="title"></x-form-label>
                            <input type="text" name="title" class="form-control" placeholder="{{ __('keywords.title') }}" value="{{ $feature->title }}">
                            <x-validation-error field="title"></x-validation-error>
                        </div>
                        <div class="col-md-6">
                            <x-form-label field="icon"></x-form-label>
                            <input type="text" class="form-control" name="icon" placeholder="{{ __('keywords.icon') }}" value="{{ $feature->icon }}">
                            <x-validation-error field="icon"></x-validation-error>
                        </div>
                        <div class="col-md-12 mt-3">
                            <x-form-label field="description"></x-form-label>
                            <textarea class="form-control" name="description" placeholder="{{ __('keywords.description') }}">{{ $feature->description }}</textarea>
                            <x-validation-error field="description"></x-validation-error>
                        </div>
                      </div>
                      <x-submit-button></x-submit-button>
                </form>
              </div>
            </div>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@endsection