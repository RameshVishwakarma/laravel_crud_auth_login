@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css"> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row col-md-12">
                        <a href="{{ url('add') }}">
                            <button type="button">Add</button>
                        </a>
                    </div>    
                    <br>
                    <div>
                        <?php
                            $select_data = App\Student::get();
                        ?>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width:10%;">Name</th>
                                        <th style="width:10%;">Image</th>
                                        <th style="width:5%;">Edit</th>
                                        <th style="width:5%;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($select_data as $val)
                                    <tr>
                                        <td>{{ $val->name }}</td>
                                        <td>
                                            <img src="{{ asset('public/images/'.$val->image) }}" style="width:50%; height: 30%;" />
                                        </td>
                                        <td><a href="{{ url('edit', ['id'=>$val->id]) }}">Edit</a></td>
                                        <td><a href="{{ url('delete', ['id'=>$val->id]) }}">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>    
                        </table>        
                    </div>                                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script> -->

@endsection
