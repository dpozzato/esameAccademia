@include('parts.head')

@include('parts.navbar')

<div class="w-75">
    <h1 class="m-5">Ecco le canzoni più amate del genere {{$genre}}!</h1>
    <table class="table table-striped table-hover mx-5">
    <thead>
        <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Artista</th>
        <th scope="col">Anno</th>
        <th scope="col">Popolarità</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($songs as $song)
        <tr>
            <th scope="row">{{ $song->title }}</th>
            <td>{{ $song->artist }}</td>
            <td>{{ $song->year }}</td>
            <td>
                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"   data-bs-placement="right" data-bs-content="{{$song->popularity}}">
                Clicca per vedere la popolarità
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

<script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>
@include('parts.footer')