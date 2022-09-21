<h1>Prices</h1>

@foreach ($prices->data as $price)
    <li>
        {{ $price->unit_amount / 100 }}
        {{ $price->currency}}
        <form method="POST" action="/billing/subscribe">
        @csrf
        <input type="hidden" name="" id="" value="{{ $price->id }}">
        <button type="submit">Buy Now</button>
        </form>
    </li>
@endforeach