@extends('admin.master')

@section('title', __('keywords.add_new_testmonial'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.add_new_testmonial') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <form method="POST" action="{{ route('admin.testmonials.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">                    
                          <x-form-label field="name"></x-form-label>
                            <input type="text" id="simpleinput" name="name" class="form-control" placeholder="{{ __('keywords.name') }}" value="{{ old('name') }}">
                            <x-validation-error field="name"></x-validation-error>
                          </div>
                        <div class="col-md-6">
                          <x-form-label field="position"></x-form-label>
                          <input type="text" id="simpleinput" class="form-control" name="position" placeholder="{{ __('keywords.position') }}" value="{{ old('position') }}">
                            <x-validation-error field="position"></x-validation-error>
                        </div>
                        <div class="col-md-12">
                          <x-form-label field="image"></x-form-label>
                          <input type="file" id="simpleinput" class="form-control-file" name="image">
                            <x-validation-error field="image"></x-validation-error>
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