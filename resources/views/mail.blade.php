<h1>New Subscription</h1>

<p>There is a new signup at Koboaccountant, with the following information</p>

<h3>Name: {{$member->name}}</h3>
<h3>Phone: {{$member->phone}}</h3>
<h3>Email: {{$member->email}}</h3>
<h3>Business name: {{$member->business_name}}</h3>
<h3>Business Location: {{$member->business_location}}</h3>
<h3>Amount: {{number_format($member->package / 100)}}</h3>

<h1>Please follow up the client immediately</h1>
