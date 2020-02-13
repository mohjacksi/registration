<form method="POST" action="{{ route('student.update', $student->id) }}">
    @csrf
    name: <input name="name" id="name" type="text" value="{{$student->name}}">

    <input type="submit">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
