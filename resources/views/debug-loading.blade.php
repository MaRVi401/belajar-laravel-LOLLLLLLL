@foreach ($users as $user)
    <p>Nama: {{ $user->name }}</p>
    <ul>
        @foreach ($user->posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
@endforeach
