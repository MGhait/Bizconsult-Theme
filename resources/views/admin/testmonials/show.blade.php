@extends('admin.master')

@section('title', __('keywords.show_testmonial'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.show_testmonial') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <form method="POST" action="{{ route('admin.testmonials.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                          <label for="name">{{ __('keywords.name') }}</label>
                          <p class="form-control">{{  $testmonial->name }}</p>
                        </div>
                        <div class="col-md-5">
                          <label for="position">{{ __('keywords.position') }}</label>
                          <p class="form-control">{{  $testmonial->position }}</p>
                        </div>
                        <div class="col-md-2">
                          <label for="position">{{ __('keywords.position') }}</label>
                          <div>
                            <img src="{{ asset("storage/testmonials/$testmonial->image") }}" width="35px">
                          </div>
                        </div>
                        <div class="col-md-12 mt-3">
                          <label for="simpleinput">{{ __('keywords.description') }}</label>
                          <p class="form-control" name="description">{{  $testmonial->description }}</p>
                        </div>
                      </div>
                </form>
              </div>
            </div>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@endsection