@extends('layouts.app')

@section('content')
<div class="card m-5">
    <div class="card-header">
        Type A Employee (Earning less than 60k)
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Employee Id</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Bonus</th>
                    <th>Med Benefits</th>
                    <th>Allowences</th>
                    <th>Leave Expense</th>
                    <th>Total</th>
                    <th>Joined</th>
                </tr>
            </thead>
            <tbody>
                @foreach($typeA as $typea)
                <tr>
                    <td>{{$typea['employee_name']}}</td>
                    <td>{{$typea['employee_id']}}</td>
                    <td>{{$typea['age']}}</td>
                    <td>{{$typea['salary']}}</td>
                    <td>{{$typea['bonus']}}</td>
                    <td>{{$typea['med_claims']}}</td>
                    <td>{{$typea['allowences']}}</td>
                    <td>{{$typea['leave_payments']}}</td>
                    <td>{{$typea['totalExpense']}}</td>
                    <td>{{$typea['joined']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="card m-5">
    <div class="card-header">
        Type B Employee (Earning more than 60k and less than 100k)
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Employee Id</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Bonus</th>
                    <th>Med Benefits</th>
                    <th>Allowences</th>
                    <th>Leave Expense</th>
                    <th>Total</th>
                    <th>Joined</th>
                </tr>
            </thead>
            <tbody>
                @foreach($typeB as $typeb)
                <tr>
                    <td>{{$typeb['employee_name']}}</td>
                    <td>{{$typeb['employee_id']}}</td>
                    <td>{{$typeb['age']}}</td>
                    <td>{{$typeb['salary']}}</td>
                    <td>{{$typeb['bonus']}}</td>
                    <td>{{$typeb['med_claims']}}</td>
                    <td>{{$typeb['allowences']}}</td>
                    <td>{{$typeb['leave_payments']}}</td>
                    <td>{{$typeb['totalExpense']}}</td>
                    <td>{{$typeb['joined']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="card m-5">
    <div class="card-header">
        Type C Employee (Earning more than 100k)
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Employee Id</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Bonus</th>
                    <th>Med Benefits</th>
                    <th>Allowences</th>
                    <th>Leave Expense</th>
                    <th>Total</th>
                    <th>Joined</th>
                </tr>
            </thead>
            <tbody>
                @foreach($typeC as $typec)
                <tr>
                    <td>{{$typec['employee_name']}}</td>
                    <td>{{$typec['employee_id']}}</td>
                    <td>{{$typec['age']}}</td>
                    <td>{{$typec['salary']}}</td>
                    <td>{{$typec['bonus']}}</td>
                    <td>{{$typec['med_claims']}}</td>
                    <td>{{$typec['allowences']}}</td>
                    <td>{{$typec['leave_payments']}}</td>
                    <td>{{$typec['totalExpense']}}</td>
                    <td>{{$typec['joined']}}</td>
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
            'iDisplayLength': 5,
            'lengthMenu': [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ]
        });
    })
</script>
@endsection