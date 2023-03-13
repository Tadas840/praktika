@extends('partials.app')

@section('content')
    
<div class="page">
    <div class="container-xl">
        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                     <div class="row g-2 align-items-center">
    <form action="{{url("editspec/".$spec->id)}}" method="POST">
        @csrf 
        @method('PUT')
        <table class="table table-bordered styled-table">
            <thead>
                <tr>
                    <th>Veislės Pavadinimas</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><input type="text" name="veislname" value="{{$spec['veislname']}}"></td>
                    <td> <button style="" type="submit"><i style="font-size:16px; color:green;" class="fa fa-check"></i></button></td>
                </tr>
            </tbody>
        </table>
    
    </form>
    
</div>

@endsection
