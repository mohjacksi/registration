<a href="/students/create">create</a>


<ol>
@foreach($students as $student)

        <li>
            {{$student->name}}
        </li>
    <ul>
        <li><a href="/students/{{$student->id}}">show</a></li>
        <li><a href="/students/edit/{{$student->id}}">edit</a></li>
        <li><a href="/students/delete/{{$student->id}}">delete</a></li>
    </ul>

@endforeach
</ol>
