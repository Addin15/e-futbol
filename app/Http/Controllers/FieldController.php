<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Order;

class FieldController extends Controller
{
    public function getAvailability(Request $request) {
        $fieldID = request('field_id');
        $date = request('book_date');

        $response = Booking::where('field_id', $fieldID)->where('book_date', $date)->get();

        return response($response, 200);
    }

    public function bookFields(Request $request) {
        $bookerID = request('user_id');
        $amount = request('amount');
        $bookings = request('bookings');

        $order = Order::create([
            'booker_id' => $bookerID,
            'amount' => $amount,
            'datetime' => date('Y-m-d H:i:s'),
        ]);

        
        if (is_array($bookings)) {
            $length = count($bookings);
            for ($i=0; $i < $length; $i++) { 
                $response[$i] = Booking::create([
                    'order_id' => $order->id,
                    'field_id' => $bookings[$i]["field_id"],
                    'book_date' => $bookings[$i]["book_date"],
                    'time'=> $bookings[$i]["time"],
                ]);
            }
        }

        return response($response, 201);

    }
}