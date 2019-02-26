@foreach ($items as $item)
    <p>{{ $item->id }}</p>
    {{ $item->title }}
@endforeach

