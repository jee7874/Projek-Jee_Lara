@extends('layouts.app')
@section('content')
<div class="container">
<table class="table table-bordered">
    <thead>
        <tr><th colspan="2"><h3> Report Details </h3></th>
        </tr>
    </thead>
<tbody>
        <tr>
            <td>Report Title</td>
            <td>: {{$report->title}}</td>
        </tr>
        <tr>
            <td>Report Description  </td>
            <td>: {{$report->description}}</td>
        </tr>
        <tr>
            <td>Report Priority</td>
            <td>: {{$report->priority}} </td>
        </tr>
        <tr>
            <td>Created at</td>
            <td> : {{$report->created_at}}</td>
        </tr>
        <tr>
            <td>Update at</td>
            <td> : {{$report->updated_at}} </td>
         </tr>
</tbody>
</table>
</div>
@endsection