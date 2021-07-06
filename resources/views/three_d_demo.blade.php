@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 style="margin-left:5px;">{{ __('3D Shoe Model Demo') }}</h1></div>
                <br/><br/>
                <three-dimensional-model-component></three-dimensional-model-component>
                <br/><br/>

            </div>
        </div>
    </div>
</div>
<br/>


@endsection
