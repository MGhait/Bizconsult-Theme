@extends('admin.master')

@section('title', __('keywords.add_new_feature'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.add_new_feature') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <form method="POST" action="{{ route('admin.features.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">                    
                          <x-form-label field="title"></x-form-label>
                            <input type="text" id="simpleinput" name="title" class="form-control" placeholder="{{ __('keywords.title') }}" value="{{ old('title') }}">
                            <x-validation-error field="title"></x-validation-error>
                          </div>
                        <div class="col-md-6">
                          <x-form-label field="icon"></x-form-label>
                          <input type="text" id="simpleinput" class="form-control" name="icon" placeholder="{{ __('keywords.icon') }}" value="{{ old('icon') }}">
                            <x-validation-error field="icon"></x-validation-error>
                        </div>
                        <div class="col-md-12 mt-3">
                          <x-form-label field="description"></x-form-label>
                            <textarea id="simpleinput" class="form-control" name="description" placeholder="{{ __('keywords.description') }}">{{ old('description') }}</textarea>
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