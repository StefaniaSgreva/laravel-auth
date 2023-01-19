<h1>Hello Super admin!</h1>
<div>
    You have a new message in your inbox:<br>
    Name: {{ $lead->name }}<br>
    Email: {{ $lead->email }}<br>
    Message:<br>
    {{ $lead->message }}
</div>