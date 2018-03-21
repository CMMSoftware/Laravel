@extends('fuse.template.master')

@section('content')
<div class="block-header">
    <h2>Clientes</h2>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@endsection