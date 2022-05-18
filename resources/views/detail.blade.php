<h1>Mes details</h1>

    <h3>{{$formation->nom}}</h3>


    @forelse ($formation->stagiaires as $item)
        
            <h2>{{$item->nom}}</h2>
            
        @empty

            <h4>{{"Il n'y a plus de Stagiaires dans cette formation.!!"}}</h4>
        
    @endforelse

    