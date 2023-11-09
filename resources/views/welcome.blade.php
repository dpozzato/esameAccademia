@include('parts.head')

@include('parts.navbar')

<div class="card position-absolute top-50 start-50 translate-middle" style="width: 36rem;">
  <img src="https://static.sky.it/images/skytg24/it/spettacolo/musica/2023/10/23/migliori-canzoni-pop-di-sempre-billboard-classifica/classifica-billboard-ipa.jpg.transform/hero-mobile-2x/1dbcd458afbe2aa982754fcec64faac258ae75c7/img.jpg" class="card-img-top" alt="gente che canta">
  <div class="card-body">
    <h1 class="card-text">Seleziona il genere che ti piace e ricevi spunti su che musica ascoltare!</h1>
    <form class="d-flex" method="GET" action="/songs">
        <select class="form-select w-75" aria-label="Default select example" name='genre'>
            <option selected>Seleziona il genere!</option>
            @foreach ($genres as $genre)
                @foreach ($genre as $key => $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</div>


@include('parts.footer')
    





