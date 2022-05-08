@component('mail::message')
# Contact form Submission

From: {{$contact['name']}}

Email: {{$contact['email']}}

Subject: {{$contact['subject']}}

Message: {{$contact['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
