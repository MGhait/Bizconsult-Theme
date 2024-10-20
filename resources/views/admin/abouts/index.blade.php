@extends('admin.master')

@section('title', __('keywords.abouts'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title"> {{ __('keywords.abouts') }} </h2>
        <div class="page-title-right"> 
            {{-- <a href="{{ route('admin.abouts.create') }}" class="btn btn-sm btn-primary">
                {{ __('keywords.add_new') }}
            </a> --}}
            <x-action-button href="{{ route('admin.abouts.create') }}" type="create"></x-action-button>
        </div>
        </div>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                <x-success-alert></x-success-alert>
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th> {{ __('keywords.title') }} </th>
                        <th width="10%"> {{ __('keywords.icon') }} </th>
                        <th width="15%"> {{ __('keywords.actions') }} </th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($abouts) > 0)
                        @foreach ($abouts as $key => $about )
                            <tr>
                                <td>{{ $abouts->firstItem() + $loop->index }}</td>
                                <td>{{ $about->title }}</td>
                                <td>{{ $about->icon }}</td>
                                <td>

                                    <x-action-button href="{{ route('admin.abouts.show',['about' => $about]) }}" type="show"></x-action-button>
                                    
                                    <x-action-button href="{{ route('admin.abouts.edit',['about' => $about]) }}" type="edit"></x-action-button>

                                    {{-- <form method="POST" action="{{ route('admin.abouts.destroy',['about' => $about]) }}" id="form-delete-{{ $about->id }}" class="d-inline" onclick="confirmDelete({{ $about->id }})">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger">
                                            <i class="fe fe-trash-2 fa-2x"></i>
                                        </button>
                                    </form> --}}
                                    <x-delete-button href="{{ route('admin.abouts.destroy',['about' => $about]) }}" id="{{ $about->id }}"></x-delete-button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <x-empty-alert></x-empty-alert>
                    @endif
                  </tbody>
                </table>
                {{ $abouts->render('pagination::bootstrap-5') }}
              </div>
            </div>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@endsection