@extends('admin.master')

@section('title', __('keywords.artical_settings'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 mb-5">
        <h2 class="h5 page-title"> {{ __('keywords.hero_artical') }} </h2>
        <!-- simple table -->
        <div class="card shadow">
            <div class="card-body">
                @if(session('success') && session('id') == 1)
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form method="POST" action="{{ route('admin.articals.update', ['artical' => $heroArtical]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <x-form-label field="title"></x-form-label>
                        <input type="text" name="title" class="form-control" placeholder="{{ __('keywords.title') }}" value="{{ $heroArtical->title }}">
                        <x-validation-error field="title"></x-validation-error>
                    </div>
                    <div class="col-md-6 mt-2">
                        <x-form-label field="description"></x-form-label>
                        <textarea type="text" name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $heroArtical->description }}</textarea>
                        <x-validation-error field="description"></x-validation-error>
                    </div>
                        <div class="col-md-6 mt-4">
                            <h4 class="form-control">
                            <x-form-label field="image"></x-form-label>
                            </h4>
                            <input type="file" id="simpleinput" class="form-control-file" name="image">
                            <x-validation-error field="image"></x-validation-error>
                        </div>
                        <div class="col-md-6">
                            <h4 class="form-control mt-4">{{ __('keywords.old_image') }}</h4>
                            <img src="{{ asset("storage/$heroArtical->image") }}" width="300px">
                        </div>
                    
                    </div>
                    <x-submit-button></x-submit-button>
            </form>
            </div>
        </div>
      </div> <!-- .col-12 -->

      <div class="col-12 mb-5">
        <h2 class="h5 page-title"> {{ __('keywords.about_artical') }} </h2>
        <!-- simple table -->
        <div class="card shadow">
            <div class="card-body">
                @if(session('success') && session('id') == 2)
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form method="POST" action="{{ route('admin.articals.update', ['artical' => $aboutArtical]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <x-form-label field="title"></x-form-label>
                        <input type="text" name="title" class="form-control" placeholder="{{ __('keywords.title') }}" value="{{ $aboutArtical->title }}">
                        <x-validation-error field="title"></x-validation-error>
                    </div>
                    <div class="col-md-6 mt-2">
                        <x-form-label field="description"></x-form-label>
                        <textarea type="text" name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $aboutArtical->description }}</textarea>
                        <x-validation-error field="description"></x-validation-error>
                    </div>
                        <div class="col-md-6 mt-4">
                            <h4 class="form-control">
                            <x-form-label field="image"></x-form-label>
                            </h4>
                            <input type="file" id="simpleinput" class="form-control-file" name="image">
                            <x-validation-error field="image"></x-validation-error>
                        </div>
                        <div class="col-md-6">
                            <h4 class="form-control mt-4">{{ __('keywords.old_image') }}</h4>
                            <img src="{{ asset("storage/$aboutArtical->image") }}" width="300px">
                        </div>
                    
                    </div>
                    <x-submit-button></x-submit-button>
            </form>
            </div>
        </div>
      </div> <!-- .col-12 -->

      <div class="col-12 mb-5">
        <h2 class="h5 page-title"> {{ __('keywords.feature_artical') }} </h2>
        <!-- simple table -->
        <div class="card shadow">
            <div class="card-body">
                @if(session('success') && session('id') == 3)
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            <form method="POST" action="{{ route('admin.articals.update', ['artical' => $featureArtical]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <x-form-label field="title"></x-form-label>
                        <input type="text" name="title" class="form-control" placeholder="{{ __('keywords.title') }}" value="{{ $featureArtical->title }}">
                        <x-validation-error field="title"></x-validation-error>
                    </div>
                    <div class="col-md-6 mt-2">
                        <x-form-label field="description"></x-form-label>
                        <textarea type="text" name="description" class="form-control" placeholder="{{ __('keywords.description') }}">{{ $featureArtical->description }}</textarea>
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