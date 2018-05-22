@foreach ($items as $item)
    <div class="item">
        <strong>{{ $item->item_name }}</strong> : Rp {{ $item->item_price }} <br>
        {{ $item->item_description }}
    </div>
@endforeach