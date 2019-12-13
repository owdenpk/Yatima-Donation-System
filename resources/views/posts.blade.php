@extends('layouts.app')

@section('content')  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">How do I top up my PayPal account using my M-PESA balance?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>After completing the registration, click Top Up.</li>
                    <li>Enter the amount you would like to top up in USD and click Calculate to get the equivalent amount converted in KES. This is the KES amount you need to transfer from your M-PESA account. The exchange rate used will be displayed on the same page.</li>
                    <li>Go to your M-PESA menu and select Lipa na M-PESA then the Pay Bill option.</li>
                    <li>Enter Business Number 800088.</li>
                    <li>Enter your phone number as the Account Number.</li>
                    <li>Enter your M-PESA PIN and click Send.</li>
                    <li>Use your newly topped up balance to easily and more securely shop online or send payments with PayPal.</li>
                </ul>
                Top Ups to your PayPal account will generally be processed in real time, but may take up to 4 hours. If your PayPal balance is not in USD, you will need to log in to your PayPal account to confirm the top up request.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <!-- <a href="#" class="pl-3">Follow</a> -->
                        </div>
                    </div>
                </div>
                
                <hr>
                
                <h2>
                    <span class="font-weight-bold">
                        <span class="text-dark">{{ $post->caption }}</span>
                    </span> 
                </h2>
                <p>{{$post->description}}</p>
                <h5><b>Targeted Amount :</b> {{$post->amount}}</h5>
                <h5><b>Campaign duration :</b> {{$post->duration}}</h5>
                
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Mpesa to Paypal
                    </button>
                </div>
                <div class="col-md-6">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_donations" />
                        <input type="hidden" name="business" value="{{$post->user->email}}" />
                        <input type="hidden" name="item_name" value="donation" />
                        <input type="hidden" name="currency_code" value="USD" />
                        <input class="btn btn-primary btn-lg" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_KE/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
