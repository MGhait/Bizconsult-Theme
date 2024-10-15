@extends('admin.master')

@section('title', __('keywords.show_service'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.show_service') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="simpleinput">{{ __('keywords.title') }}</label>
                            <p="title" class="form-control">{{  $service->title }}</p>
                        </div>
                        <div class="col-md-6">
                            <label for="simpleinput">{{ __('keywords.icon') }}</label>
                            <div class="mt-1">
                                <i class="{{ $service->icon }} fa-2x"></i>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="simpleinput">{{ __('keywords.description') }}</label>
                            <p class="form-control" name="description">{{  $service->description }}</p>
                        </div>
                      </div>
                      {{-- <button type="submit" class="btn btn-primary btn-sm mt-3">{{ __('keywords.submit') }}</button> --}}
                </form>
              </div>
            </div>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@endsection