@extends('admin.master')

@section('title', __('keywords.services'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title"> {{ __('keywords.services') }} </h2>
        <div class="page-title-right"> 
            <a href="{{ route('admin.services.create') }}" class="btn btn-sm btn-primary">
                {{ __('keywords.add_new') }}
            </a>
        </div>
        </div>
        <!-- simple table -->
            <div class="card shadow">
              <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
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
                    @if(count($services) > 0)
                        @foreach ($services as $key => $service )
                            <tr>
                                <td>{{ $services->firstItem() + $loop->index }}</td>
                                <td>{{ $service->title }}</td>
                                <td>
                                    <i class="{{ $service->icon }} fa-2x"></i>
                                </td>
                                <td>
                                    <a href="{{ route('admin.services.show',['service' => $service]) }}" class="btn btn-sm btn-primary">
                                        <i class="fe fe-eye fa-2x"></i>
                                    </a>
                                    <a href="{{ route('admin.services.edit',['service' => $service]) }}" class="btn btn-sm btn-success">
                                        <i class="fe fe-edit fa-2x"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.services.destroy',['service' => $service]) }}" id="form-delete-{{ $service->id }}" class="d-inline" onclick="confirmDelete({{ $service->id }})">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger">
                                            <i class="fe fe-trash-2 fa-2x"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger">{{ __('keywords.no_records_found') }}</div>
                            </td>
                        </tr>
                    @endif
                  </tbody>
                </table>
                {{ $services->render('pagination::bootstrap-5') }}
              </div>
            </div>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->

  <script>
    function confirmDelete(id) {
        if(confirm('Are You Sure You Want to Delete This Record? \n It Will Be Deleted Permanently!')){
            // alert('confimred');
            document.getElementById('form-delete-' + id).submit();
        }
    }
  </script>
@endsection