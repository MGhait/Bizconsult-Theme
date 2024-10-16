@extends('admin.master')

@section('title', __('keywords.add_new_member'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.add_new_member') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <form method="POST" action="{{ route('admin.members.store') }}" enctype="multipart/form-data">
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
                        <div class="col-md-4 mt-3">
                          <x-form-label field="facebook"></x-form-label>
                            <input type="url" id="simpleinput" class="form-control" name="facebook" placeholder="{{ __('keywords.facebook') }}" value="{{ old('facebook') }}">
                            <x-validation-error field="facebook"></x-validation-error>
                        </div>
                        <div class="col-md-4 mt-3">
                          <x-form-label field="twitter"></x-form-label>
                            <input type="url" id="simpleinput" class="form-control" name="twitter" placeholder="{{ __('keywords.twitter') }}" value="{{ old('twitter') }}">
                            <x-validation-error field="twitter"></x-validation-error>
                        </div>
                        <div class="col-md-4 mt-3">
                          <x-form-label field="linkedin"></x-form-label>
                            <input type="url" id="simpleinput" class="form-control" name="linkedin" placeholder="{{ __('keywords.linkedin') }}" value="{{ old('linkedin') }}">
                            <x-validation-error field="linkedin"></x-validation-error>
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