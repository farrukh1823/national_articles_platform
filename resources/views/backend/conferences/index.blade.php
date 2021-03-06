
@extends('backend/backend_layouts.main')
@include('backend/nav')
@section('content')

    <style>
        td{
            width: 100px;
        }
    </style>
    <hr>
    <div class="container" style="background-color: white; padding: 10px">

        <a  href="{{ route('conferences.create') }}" class="btn btn-success">Yangi Konferensiya qoshish</a>


        <h1>Konferensiyalar</h1>

        <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th><b>ID</b></th>
                <th class="th-sm"><b>Konferensiya nomi</b>
                </th>
                <th class="th-sm"><b>Konferensiya tashkiloti</b>
                </th>
                <th class="th-sm"><b>Konferensiya turi</b>
                </th>
               
                <th class="th-sm"><b>Operations</b>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($conferences as $item)
              
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->company->name }}</td>
                        <td>{{ $item->conferencetype->name }}</td>
                        
                        <!-- <td>@foreach ($conference_category as $jcategory)
                        {{ $jcategory->category->name }} @endforeach
                        </td> -->
                    <td >
                    <a href="{{ route('conferences.show', ['id' => $item->id]) }}" title="show" class="btn blue lighten-2 " style="padding:10px 15px">
                        <i  class="fas fa-eye" aria-hidden="true">Show</i>
                    </a>
                    
                    <form action="{{ route('conferences.destroy', ['id' => $item->id] )}}" method="post">
                        {{ method_field('delete') }}
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" title="delete" class="btn blue lighten-2 " style="padding:10px 15px">
                            <i class="fas fa-trash" aria-hidden="true"> Delete</i>
                        </button>
                        {{ csrf_field() }}
                    </form>
                </td>
                    </tr>
                </a>
            @endforeach

        </table>

        {{--<div class="row">--}}
            {{--<div class="col-md-12 text-center">--}}
                {{--{{ $journals ->links() }}--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>
    @endsection