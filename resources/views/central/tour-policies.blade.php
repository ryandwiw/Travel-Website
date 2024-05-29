@extends('layouts.guest')

@section('isi')
    
<div class="container" style="margin-top:90px;">
    <div class="mt-5 mb-5">

        <h1>Discovery Your Indonesian Tour</h1>
        <h1>Policies</h1>
        <hr>
        <img src="{{asset('assets/image/img2.jpg')}}" alt="" class="img-fluid">
    </div>
    <div class="mt-5">
        <p>There is a consultation fee of $15 on deposits. This fee is applied at the discretion of Discover Your Indonesia on any refund request based on the amount of consultation that has gone into the booking. Below is the refund policy for Yogyakarta, Jakarta, Bali, and Lombok Tours:</p>
    <ul>
        <li><strong>Up to 7 days:</strong> The 40% deposit is refundable, minus the $15 consultation fee, for Yogyakarta up to 7 days before your travel date.</li>
        <li><strong>7-3 days before the travel date:</strong> Within the 7 day period, there is a cancellation fee of 50% of the deposit or USD 30, whichever is less.</li>
        <li><strong>2 days and less before the travel date:</strong> For all tours, if you make a cancellation less than two days prior to your travel date the deposit is not refundable (we will try and accommodate any changes to your itinerary as the result of flight delays or cancellations).</li>
        <li><strong>East Java and Flores tours:</strong> Deposits are non-refundable as it is impossible to cancel the hotel bookings (we usually settle the payment 14 days before your travel date). The 40% deposit is refundable, minus the $15 consultation fee, for East Java up to 14 days before your travel date.</li>
    </ul>

    <h2>Booking Accommodation</h2>
    <p>Hotel bookings made through Discover Your Indonesia require 100% payment in advance. You will get a receipt from the hotel as soon as the booking is made.</p>

    <h2>Booking in Advance</h2>
    <p>We can only confirm bookings 8 weeks in advance of a tour.</p>

    <h2>Liabilities</h2>
    <p>None of the activities that Discover Your Indonesia promotes are dangerous. We’ve never had any incidents happen involving our guests and we don’t think you’ll have a problem, but accidents do happen on holiday.</p>
    <p>Discover Your Indonesia is not liable for any accidents that may occur during a tour. We strongly advise arranging travel insurance for your trip to Indonesia (hospital bills get expensive very quickly in Indonesia).</p>

    <h2>Support</h2>
    <p>Once you have made a booking we are always one email away. We are here to help you have a great holiday. If you have any issues just get in touch.</p>
    </div>
    <div class="text-center">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('assets/image/img2.jpg')}}" alt="" class="img-fluid img-tour-policies" style="width:600px; height:400px;">
            </div>
        </div>
        <p class="mt-3 fw-bold">Sunrise from Kingkong Hill., Bromo Tengger Semeru National Park</p>
        <hr>
    </div>
</div>

<style>
    @media(max-width:767px){
        .img-tour-policies{
            height: 300px !important;
        }
    }
</style>

@endsection
