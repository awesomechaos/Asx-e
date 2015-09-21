{{ $arr['key'] }}
{{ $arr['map'] }}
@if (count($arr['child']) > 0)
    @foreach ($arr['child'] as $arr)
        @include('admin.b', $arr)
    @endforeach
@endif