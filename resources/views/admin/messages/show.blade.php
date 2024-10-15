@extends('admin.master')

@section('title', __('keywords.show_message'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.show_message') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="simpleinput">{{ __('keywords.name') }}</label>
                            <p class="form-control">{{  $message->name }}</p>
                          </div>
                          <div class="col-md-6">
                            <label for="simpleinput">{{ __('keywords.email') }}</label>
                            <p class="form-control">{{  $message->email }}</p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="simpleinput">{{ __('keywords.subject') }}</label>
                            <p class="form-control">{{  $message->subject }}</p>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="simpleinput">{{ __('keywords.message') }}</label>
                            <p class="form-control ">{{  $message->message }}</p>
                        </div>
                      </div>
              </div>
            </div>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@endsection