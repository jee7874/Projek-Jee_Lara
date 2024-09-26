@extends('layouts.app')
@section('content')
@if(count($reports)>0)

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
      }
      h3 {
        text-align: center;
      }
      </style>

      <br>
      <table style="width:70%" align="center">
        <table class="table table-striped">

    <thead>
        <th>Report Title</th>
        <th>Report Description</th>
        <th>Report Priority</th>
        <th colspan=3>Action</th>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->title}}</td>
            <td>{{$report->description}}</td>
            <td>{{$report->priority}}</td>
            <td><a href="/reports/{{$report->id}}" class="btn btn-primary">Details</a></td>
            <td><a href="/reports/{{$report->id}}/edit" class="btn btn-warning">Edit</a></td>
            <td><form action="/reports/{{$report->id}}" method="POST">@csrf @method('DELETE')<input type="submit" value="Delete" class="btn btn-danger" onclick = "return confirm('Are you sure?')"></form></td>
        </tr>
        @endforeach
    </tbody>
</table>
</p>
<h3><a href="/reports/create">Create Report</a></h3>
@else
No Data
@endif
@endsection