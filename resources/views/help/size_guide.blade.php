@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 style="margin-left:5px;">{{ __('Size Guide') }}</h1></div>
                <br/><br/>
                <accordion-component></accordion-component>
                <br/><br/>

            </div>
        </div>
    </div>
</div>
<br/>


@endsection
