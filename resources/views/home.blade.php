@extends('layouts.app')

@section('content')
<div class="card m-2">
    <div class="card-header">
        Users List
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Profile Pic</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allUsers as $user)
                <tr>
                    <td></td>
                    <td>{{$user['fullname']}}</td>
                    <td>{{$user['username']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['age']}}</td>
                    <td>{{$user['gender']}}</td>
                    <td><a href="{{route('sendMail',['id' => $user['id']])}}" class="btn btn-primary">Send Email</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('.table').DataTable({
            order:[],
            'iDisplayLength': 10,
            'lengthMenu': [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]
        });
    })
</script>
@endsection