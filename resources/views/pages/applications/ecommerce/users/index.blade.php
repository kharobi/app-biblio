@extends('layout.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mb-4">
        <div class="pull-left">
            <h2>Users Management                
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('ecommerce.users.create',app()->getLocale()) }}"> Create New User</a>
        </div>
            </h2>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success my-2">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-hover table-striped">
 <tr>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-secondary text-dark">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('ecommerce.users.show', ['language'=>app()->getLocale(), 'user'=> $user->id]) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('ecommerce.users.edit',['language'=>app()->getLocale(), 'user'=> $user->id]) }}">Edit</a>
       <a class="btn btn-success" href="{{ route('ecommerce.users.destroy', ['language' => app()->getLocale(), 'user' => $user->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">Deleete</a>
            <form id="delete-form-{{ $user->id }}" action="{{ route('ecommerce.users.destroy', ['language' => app()->getLocale(), 'user' => $user->id]) }}" method="POST" style="display: none;">
              @csrf
              @method('DELETE')
            </form>
    </td>
  </tr>
 @endforeach
</table>
@endsection 