<h1>New website enquiry</h1>

<p><strong>Name:</strong> {{ $contactDetails['name'] }}</p>
<p><strong>Email:</strong> {{ $contactDetails['email'] }}</p>
<p><strong>Phone:</strong> {{ $contactDetails['phone'] }}</p>
<p><strong>Site / service requested:</strong> {{ $contactDetails['site'] }}</p>
<p><strong>Message:</strong><br>{{ $contactDetails['message'] }}</p>

@if (count($images) > 0)
    <p>{{ count($images) }} image(s) attached to this enquiry.</p>
@endif
