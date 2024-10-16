@extends('admin.master')

@section('title', __('keywords.add_new_company'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.update_company') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <form method="POST" action="{{ route('admin.companies.update', ['company' =>$company]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-6 mt-4">
                        <h4 class="form-control">
                          <x-form-label field="image"></x-form-label>
                        </h4>
                        <input type="file" id="simpleinput" class="form-control-file" name="image">
                          <x-validation-error field="image"></x-validation-error>
                      </div>
                      <div class="col-md-6">
                        <h4 class="form-control mt-4">{{ __('keywords.old_image') }}</h4>
                        <img src="{{ asset("storage/companies/$company->image") }}" width="300px">
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