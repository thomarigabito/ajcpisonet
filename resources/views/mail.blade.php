{{-- Embed image to email --}}
<img style="width: 500px" height="150px" src="{{ $message->embed(public_path().'/assets/ajcofclogo.jpg')}}">

<h2>Hi <strong style="text-transform: capitalize">{{$fullname}}</strong>,</h2>
<p class="my-2">Below is the summary of your monthly billing:</p><br/>
<p>Account Number : {{$accountnumber}}</p><br/>
<p>Acoount Name : {{$fullname}}</p><br/>
<p>Current Charges : 1500</p><br/>



<h3>Regards</h3>
