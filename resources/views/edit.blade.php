@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Form</div>
                    <div class="card-body">
                        <form action="{{ url('edit_form') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="firstname" class ="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                   <input type="hidden" name="hidden_id" value="{{ $data->id }}">
                                   <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $data->name }}">
                                </div>
                             </div>
                             <div class="form-group">
                                <label for="lastname" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                   <input type="file" id="img" name="img" value="{{ $data->image }}">
                                </div>
                             </div>
                             <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                   <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                             </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
