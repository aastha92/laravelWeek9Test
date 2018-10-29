@extends ('layout\app')

@section('content')

<form action="/hero/{$hero->id}" method="post">
    @csrf
    @method('PATCH')

<input type="text" name="subject" placeholder="Cause of emergency" value="{{$hero->subject}}">

<textarea name="description" placeholder="Thorough description" value="{{$hero->description}}"></textarea>

    <input type="submit" value="Send to the Watchtower">
</form>



@endsection