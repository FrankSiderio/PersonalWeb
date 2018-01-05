@component('mail::message')
# Feedback was sent by {{ $email }}!

Here is what they said:

{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
