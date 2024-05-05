<x-mail::message>
# Hello Admin


<h3>Name:{{ $data['name'] }}</h3>
<h3>{{ $data['email'] }}</h3>
<h3>subject:{{ $data['subject'] }}</h3>
<h3>message:{{ $data['message'] }}</h3>

<x-mail::button :url="''">
Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
