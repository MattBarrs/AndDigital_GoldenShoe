@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 style="margin-left:5px;">{{ __('Summer Collection') }}</h1></div>
                <br/><br/>
                <table>
                @foreach($shoes as $shoe)
                    <tr>

                            <td style="width:300px;height:300px;">
                                <a href="/view/{{$shoe['id']}}">
                                    <img src="/images/summer_collection/{{ $shoe['image']}}" style="width:100%;margin-left:5px;border-radius:30px;"/>
                                </a>
                            </td>
                            <td style="padding-left: 15px;width:20%;">
                                <div style="font-family:'Arial Black', sans-serif;font-size:2em;font-variant:small-caps;letter-spacing:0.2em;color:#CC0000;background-color:#FFCC00;border-radius:5px;margin-left: auto;margin-right:auto;">
                                    {{ $shoe['discount']}}%  Discount!
                                    </div>
                            </td>

                            <td style="width:20%;">
                                <div style="font-family:'Arial Black', sans-serif;font-size:2em;font-variant:small-caps;letter-spacing:0.2em;color:#ffffff;background-color:#00CC00;border-radius:5px;margin-left: auto;margin-right:auto;">
                                    £{{ $shoe['price']}}
                                </div>
                            </td>
                        </a>
                    </tr>

                @endforeach
                </table>
                <br/><br/>

            </div>
        </div>
    </div>
</div>
<br/>


@endsection
