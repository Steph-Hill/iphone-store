<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">

    <title>Hillions Store </title>
</head>
<body>

    <nav class="h-10 bg-black"> </nav>

    <div class="h-14 max-w-5xl mx-auto flex justify-between items-center">

        <h3 class="text-xl font-medium text-black">Accessoires</h3>
        <a href="#" class="text-xs-black">Tout Parcourir</a>

    </div>

    <div class="bg-gray-100 border-t border-gray-300">

        <div class="max-w-5xl mx-auto">
 
            <h1 class="text-4xl py-10">Coques et protections</h1>

        </div>

    </div>

    <div class="h-14 border-t border-b border-gray-300 text-gray-400 text-xs sticky top-0 bg-white">

        <div class="max-w-6xl mx-auto h-full flex justify-between items-center">

            <div class="flex space-x-1">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>

                 <span>Filtre</span>
                
            </div>
                 
            <div>Trier par <span class="text-black">sélection</span></div>

        </div>
        

    </div>

<div class="max-w-6xl mx-auto"> 

    <div class="grid grid-cols-3">

        

       
        @forelse ($phones as $phone)
            
            <div class="border-b border-r border-gray-300 text-center ">

                <div class="aspect-square">

                    <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=940&hei=1112&fmt=png-alpha&.v=1645552346295" class="w-full h-full object-center object-cover" alt="">

                </div>


                <div class="pt-10 pb-4 px-10">
                     @if ($phone->etat==1)

                        <p class="text-xs font-medium text-red-500 mb-5">Nouveauté !</p>  
                     @else

                         <p class="text-xs font-light text-black-500 mb-5">"Ancien Model :{</p>  

                     @endif

                   
               
                    <h3 class="text-md font-light text-gray-700">{{$phone->titre}}</h3>
    
                    <p class="text-base text-gray-900 mt-3">{{$phone->prix}}</p>
    
                        <div class="flex justify-center space-x-2 mt-4">
                           
                            <span class="rounded-full bg-gray-500 w-4 h-4 shadow-inner" ></span>
                            <span class="rounded-full bg-orange-500 w-4 h-4 shadow-inner" ></span>
                            <span class="rounded-full bg-yellow-500 w-4 h-4 shadow-inner" ></span>
                            <span class="rounded-full bg-green-500 w-4 h-4 shadow-inner" ></span>
                            <span class="rounded-full bg-red-500 w-4 h-4 shadow-inner" ></span>
    
                        </div>

                </div>

              

            </div>
        

        @empty

            <h1>Pas De portables dispo !</h1>
            
        @endforelse


    </div>

</div>

</body>
</html>