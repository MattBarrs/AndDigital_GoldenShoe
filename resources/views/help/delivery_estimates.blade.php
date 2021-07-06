@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 style="margin-left:5px;">{{ __('Delivery Estimates') }}</h1></div>
                <br/><br/>
                <table style="margin-left: auto;margin-right:auto;">
                    <th style="padding:5px;">
                        Date Ordered
                    </th>
                    <th style="padding:5px;">
                        Total
                    </th>
                    <th style="padding:5px;">
                        Status
                    </th>
                    <th style="padding:5px;">
                        Delivery Date
                    </th>
                    <th style="padding:5px;">
                        Tracking Number
                    </th>

                    <tr >
                        @foreach($orders as $order)

                        <td style="padding:5px;">
                                {{$order['order_created']}}

                        </td>
                        <td style="padding:5px;">
                            <div style="">
                                £{{ $order['price'] }}
                            </div>
                        </td>

                        <td style="padding:5px;">
                            {{$order['delivery_status']}}
                        </td>
                        <td style="padding:5px;">
                            {{ $order['delivery_date']}}
                        </td>
                        <td style="padding:5px;">
                            {{ $order['tracking_id']}}
                        </td>
                    </tr>
                    @endforeach

                </table>
                <br/><br/>

            </div>
        </div>
    </div>
</div>

<br/>
<br/><br/>


@endsection
