

<h3>
    @foreach($depts as $d)
        {{$d->name}}
        {{$d->email}}
        {{$d->department}}
        {{$d->profile}}

    @endforeach
</h3>