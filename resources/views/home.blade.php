@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   Anda Telah Login!  &ensp;&ensp;

                    &ensp;&ensp;  &ensp;&ensp;
                    <a href="{{ route('logout') }}" class=" btn btn-secondary btn-sm "  
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Logout</b>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                    </form>
                   
                   <a  class=" btn btn-sm btn-primary " href="{{url ('/')}}"> Lanjutkan Ke Halaman</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
