@extends('admin.master')

@section('title', __('keywords.members'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title"> {{ __('keywords.members') }} </h2>
        <div class="page-title-right"> 
            <x-action-button href="{{ route('admin.members.create') }}" type="create"></x-action-button>
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
                        <th> {{ __('keywords.name') }} </th>
                        <th> {{ __('keywords.position') }} </th>
                        <th width="25%"> {{ __('keywords.image') }} </th>
                        <th width="15%"> {{ __('keywords.actions') }} </th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($members) > 0)
                        @foreach ($members as $key => $member )
                            <tr>
                                <td>{{ $members->firstItem() + $loop->index }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->position }}</td>
                                <td>
                                  <img src="{{ asset("storage/members/$member->image") }}" width="50px">
                                </td>
                                <td>

                                    <x-action-button href="{{ route('admin.members.show',['member' => $member]) }}" type="show"></x-action-button>
                                    
                                    <x-action-button href="{{ route('admin.members.edit',['member' => $member]) }}" type="edit"></x-action-button>

                                    <x-delete-button href="{{ route('admin.members.destroy',['member' => $member]) }}" id="{{ $member->id }}"></x-delete-button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <x-empty-alert></x-empty-alert>
                    @endif
                  </tbody>
                </table>
                {{ $members->render('pagination::bootstrap-5') }}
              </div>
            </div>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@endsection