{{ $data }}
@foreach($data as $v)
    {{$v->name}}:{{$v->age}}
@endforeach