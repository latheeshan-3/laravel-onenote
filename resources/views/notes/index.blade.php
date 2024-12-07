<!DOCTYPE html>
<html>
<head>
    <title>Shared Notes</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Background Video -->
    <div class="video-background">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('videos/rock.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="content">
        <h1>Shared Notes</h1>
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ route('notes.create') }}">Share Notes</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Batch</th>
                    <th>Semester</th>
                    <th>Drive Link</th>
                    @auth
                        <th>Actions</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $note)
                    <tr>
                        <td>{{ $note->name }}</td>
                        <td>{{ $note->subject }}</td>
                        <td>{{ $note->batch }}</td>
                        <td>{{ $note->semester }}</td>
                        <td><a href="{{ $note->drive_link }}" target="_blank">View</a></td>
                        @auth
                            <td>
                                <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
