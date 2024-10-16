@extends('admin.master')

@section('title', __('keywords.show_member'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
            <h2 class="h5 page-title"> {{ __('keywords.show_member') }} </h2>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <form method="POST" action="{{ route('admin.members.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                          <label for="name">{{ __('keywords.name') }}</label>
                          <p class="form-control">{{  $member->name }}</p>
                        </div>
                        <div class="col-md-4">
                          <label for="position">{{ __('keywords.position') }}</label>
                          <p class="form-control">{{  $member->position }}</p>
                        </div>
                        <div class="col-md-4">
                          <label for="image">{{ __('keywords.image') }}</label>
                          <div>
                            <img src="{{ asset("storage/members/$member->image") }}" width="50px">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <label for="facebook">{{ __('keywords.facebook') }}</label>
                          <p class="form-control" name="facebook">{{  $member->facebook }}</p>
                        </div>
                        <div class="col-md-12 mt-3">
                          <label for="twitter">{{ __('keywords.twitter') }}</label>
                          <p class="form-control" name="twitter">{{  $member->twitter }}</p>
                        </div>
                        <div class="col-md-12 mt-3">
                          <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                          <p class="form-control" name="linkedin">{{  $member->linkedin }}</p>
                        </div>
                      </div>
                </form>
              </div>
            </div>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@endsection