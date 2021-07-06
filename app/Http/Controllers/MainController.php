<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function size_guide()
    {
        return view('help.size_guide');
    }

    public function three_d_demo()
    {
        return view('three_d_demo');
    }

    public function delivery_estimates()
    {
        $order_00 = [
            'id' => 1,
            'price' => 30.99,
            'order_created' => '03/07/2021',
            'delivery_status' => 'Ordered',
            'delivery_date' => 'No Estimate yet',
            'tracking_id' => 'None',

        ];

        $order_01 = [
            'id' => 2,
            'price' => 10.99,
            'order_created' => '03/07/2021',
            'delivery_status' => 'Dispatched',
            'delivery_date' => '07/07/2021',
            'tracking_id' => 'UK_GB1204858302',

        ];

        $order_02 = [
            'id' => 3,
            'price' => 45.99,
            'order_created' => '02/07/2021',
            'delivery_status' => 'Out For Delivery',
            'delivery_date' => '05/07/2021',
            'tracking_id' => 'UK_GB1204as4hhs',

        ];

        $order_03 = [
            'id' => 4,
            'price' => 40.99,
            'order_created' => '01/07/2021',
            'delivery_status' => 'Delivered',
            'delivery_date' => '02/07/2021',
            'tracking_id' => 'UK_GBlpvddis354',

        ];
        $order_04 = [
            'id' => 5,
            'price' => 54.99,
            'order_created' => '01/07/2021',
            'delivery_status' => 'With Courier',
            'delivery_date' => '07/07/2021',
            'tracking_id' => 'UK_GBasdca84899',

        ];


        $orders = [$order_00, $order_01, $order_02, $order_03, $order_04];
        return view('help.delivery_estimates',['orders'=>$orders]);
    }


    public function return_items()
    {
        $order_00 = [
            'id' => 1,
            'price' => 30.99,
            'order_created' => '03/07/2021',
            'delivery_status' => 'Ordered',
            'delivery_date' => 'No Estimate yet',
            'tracking_id' => 'None',

        ];

        $order_01 = [
            'id' => 2,
            'price' => 10.99,
            'order_created' => '03/07/2021',
            'delivery_status' => 'Dispatched',
            'delivery_date' => '07/07/2021',
            'tracking_id' => 'UK_GB1204858302',

        ];

        $order_02 = [
            'id' => 3,
            'price' => 45.99,
            'order_created' => '02/07/2021',
            'delivery_status' => 'Out For Delivery',
            'delivery_date' => '05/07/2021',
            'tracking_id' => 'UK_GB1204as4hhs',

        ];

        $order_03 = [
            'id' => 4,
            'price' => 40.99,
            'order_created' => '01/07/2021',
            'delivery_status' => 'Delivered',
            'delivery_date' => '02/07/2021',
            'tracking_id' => 'UK_GBlpvddis354',

        ];
        $order_04 = [
            'id' => 5,
            'price' => 54.99,
            'order_created' => '01/07/2021',
            'delivery_status' => 'With Courier',
            'delivery_date' => '07/07/2021',
            'tracking_id' => 'UK_GBasdca84899',

        ];


        $orders = [$order_00, $order_01, $order_02, $order_03, $order_04];
        return view('help.return_items',['orders'=>$orders]);
    }
    public function summer_collection()
    {

        $shoe_00 = [
            'id' => 1,
            'name' => 'Black Sandals',
            'price' => 30.99,
            'discount' => 10,
            'image' =>  'black_sandals.jpg',
        ];

        $shoe_01 = [
            'id' => 2,
            'name' => 'Flip Flops',
            'price' => 10.99,
            'discount' => 20,
            'image' =>  'flip_flops.jpg',
        ];

        $shoe_02 = [
            'id' => 3,
            'name' => 'Loafers',
            'price' => 45.99,
            'discount' => 7.5,
            'image' =>  'loafers.jpg',
        ];

        $shoe_03 = [
            'id' => 4,
            'name' => 'Sandals',
            'price' => 40.99,
            'discount' => 7.5,
            'image' =>  'sandals.jpg',
        ];
        $shoe_04 = [
            'id' => 5,
            'name' => 'Shiny Sandals',
            'price' => 54.99,
            'discount' => 18,
            'image' =>  'shiny_sandal.jpg',
        ];
        $shoe_05 = [
            'id' => 6,
            'name' => 'Slip Ons',
            'price' => 12,
            'discount' => 15,
            'image' =>  'slip_ons.jpg',
        ];
        $shoe_06 = [
            'id' => 7,
            'name' => 'Sport Sandals',
            'price' => 45.99,
            'discount' => 30,
            'image' =>  'sport_sandals.jpg',
        ];

        $shoes = [$shoe_00, $shoe_01, $shoe_02, $shoe_03, $shoe_04, $shoe_05, $shoe_06];
        return view('summer_collection',['shoes'=>$shoes]);
    }

}
