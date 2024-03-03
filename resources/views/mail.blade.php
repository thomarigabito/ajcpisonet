{{-- Embed image to email --}}
<img style="width: 500px" height="150px" src="{{ $message->embed(public_path().'/assets/ajcofclogo.jpg')}}">

<h2>Hi <strong style="text-transform: capitalize">{{$fullname}}</strong>,</h2>
<p class="my-2">Below is the summary of your monthly billing:</p>
<p>Account Number : {{$accountnumber}}</p>
<p>Acoount Name : {{$fullname}}</p>
<p>Current Charges : 1500</p>



<h3>Regards</h3>
