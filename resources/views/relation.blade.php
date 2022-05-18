<h1> Mes Formations</h1>
        

            @forelse ($formations as $formation)    

                        <div class="">
                           <a href="/relation/detail/{{$formation->id}}"><h2 >{{$formation->nom}}</h2></a> 
                        </div>
                        
                       

                 @empty
                
                   <h3>Plus de formation disponible pour le moment, veuillez patientez !</h3>

            @endforelse

                {{$formations->links()}}

