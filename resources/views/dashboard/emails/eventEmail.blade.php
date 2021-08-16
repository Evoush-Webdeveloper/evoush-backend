@component('mail::message')
# {{ $details['title'] }}  
- No Peserta : *{{$details['no_peserta']}}*  
- Nama Lengkap : *{{$details['name']}}*  
- Phone : *{{$details['phone']}}*  
- Username : *{{$details['username']}}*  
- Category : *{{$details['category']}}*  
- Kota : *{{$details['city']}}*


@component('mail::button', ['url' => $details['url']])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent