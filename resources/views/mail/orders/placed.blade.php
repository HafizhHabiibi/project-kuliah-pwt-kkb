<x-mail::message>
# Order Berhasil Dibuat!

Terimakasih sudah order, nomor orderan anda adalah: {{ $order->id }}.

<x-mail::button :url="'$url'">
View Order
</x-mail::button>

Terimakasih,<br>
{{ config('app.name') }}
</x-mail::message>
