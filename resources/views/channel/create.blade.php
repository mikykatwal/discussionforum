@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Channel
                    </div>

                    <div class="card-body">
                        <form action="{{route('channel.store')}}" method = "post">
                            @csrf
                            <div class = "form-group">
                                <input type = "text" class = "form-group-input" name="edit" value = "{{ isset($channel)?$channel->name:'' }}">
                            </div>
                            <button type = "submit" class = "btn btn-success">Create Channel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

