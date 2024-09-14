@extends('layouts.base')
@section('title', 'Main Page')
@section('main')
@if(count($bbs) > 0)
<table class="table table-dark table-striped table-hover">
    <thead>
        <tr class="bg-body-tertiary">
            <th>Article</th>
            <th>Price, UAH.</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bbs as $bb)
        <tr>
            <td>
                <h3>{{ $bb->title }}</h3>
            </td>
            <td>{{ $bb->price }}</td>
            <td>
                <a class="text-white" href="{{ route('detail', ['bb' => $bb->id]) }}">More details...</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
