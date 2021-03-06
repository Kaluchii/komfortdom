@section('objects')
    <script type="text/javascript">
        var EXCHANGE_COST = {{ $prices->dollar_field }};
        var flatsObj = {
        @foreach($flats->dom_flat_group as $flat_category)
            @if($flat_category->show_field == 1)
            {{$flat_category->id_field}}: {
            layouts: {
                @foreach($flat_category->layout_group as $layout)
{{$layout->id_field}}: {
                    src: '{{$layout->layout_scheme_field->link}}?{{$layout->layout_scheme_field->cache_index}}',
                    floor: '{{$layout->floor_field}}',
                    meter_cost: '{{$layout->meter_cost_field}}',
                    area: '{{$layout->area_field}}',
                },
                @endforeach
            }
            },
            @endif
        @endforeach
        };
    </script>
@endsection