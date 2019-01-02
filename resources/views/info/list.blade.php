{{ $data }}
@foreach($data as $v)
    {{$v->name}}<br>:{{$v->age}}
@endforeach