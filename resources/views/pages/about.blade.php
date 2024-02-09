@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
    <h1>Cujba</h1>

    @php($test = 'test')

    <ul>
        @foreach ($grupe as $grup)
            <li>{{ $loop->iteration }}{{ ucfirst($grup) }}</li>

            @if ($grup == 'W-2041')
                Aceasta este grupa mea
            @else
                Aceasta este grupa nu mea
            @endif
        @endforeach

        <br><br>

        @for ($index = 0; $index < 10; $index++)
            {{ $index }}
        @endfor

    </ul>

    <script>
        let name = "{{ $title }}";
    </script>
@endsection
