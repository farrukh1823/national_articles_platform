@extends('backend/backend_layouts.main') @section('title', 'Edit for $user->fullname') @include('backend.nav') @section('content')
    <div class="container" style="background: #fefefe;">
        <div class="row">
            <div class="col-12">
                <h3> {{ $user->fullname }} ni o'zgartirish</h3>
                <div class="col-12">
                    <form action=" {{ route('users.update', ['user' => $user->id] ) }} " method="post" >
                        {{ method_field('put') }}
                        @include('backend.users.form') 
                        <input type="submit" value="Yangilash" class="btn btn-primary">
                    </form>
                </div>    
            </div>
        </div>
    </div>
@endsection