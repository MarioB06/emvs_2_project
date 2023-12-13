<!-- requests.blade.php -->

<h2>Freundesanfragen</h2>

@if($incomingRequests->count() > 0)
    <ul>
        @foreach($incomingRequests as $request)
            <li>
                {{ $request->user->username }} hat dir eine Freundschaftsanfrage gesendet.
                <form action="{{ route('dashboard.requests.accept', $request->id) }}" method="post">
                    @csrf
                    <button type="submit">Annehmen</button>
                </form>
                <form action="{{ route('dashboard.requests.decline', $request->id) }}" method="post">
                    @csrf
                    <button type="submit">Ablehnen</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>Keine ausstehenden Anfragen.</p>
@endif
