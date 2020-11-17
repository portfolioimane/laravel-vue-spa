<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        </style>
    </head>
    <body class="font-sans">
       <div id="app">
         <div class="container px-6">
           <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0 15px no-repeat">
              <h1>
                  <img alt="Laracasts" src="/images/logo.svg">
              </h1>
           </header>
           <div class="container px-8 pb-10">
           <main class="flex">
              <aside class="w-64 pt-8">
                <div class="mb-10">
                    <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                  <ul class="list-reset">
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/" exact>Logo</router-link></li>
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/LogoSymbol">Logo Symbol</router-link></li>
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/Colors">Colors</router-link></li>
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/Typography">Typography</router-link></li>
                  </ul>
               </div>
                   <div class="mb-10">
                    <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                  <ul class="list-reset">
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/Mascot">Mascot</router-link></li>
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/Illustrations">Illustrations</router-link></li>
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/LoadersAndAnimations">Loaders and Animations</router-link></li>
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/Wallpapers">Wallpapers</router-link></li>
                  </ul>
               </div>
                <div>
                    <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>
                  <ul class="list-reset">
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/SiteStats">Site Stats</router-link></li>
                    <li class="text-sm leading-loose"><router-link class="text-black" to="/Achievements">Achievements</router-link></li>
                  </ul>
               </div>
              </aside>
              <div class="primary flex-1">
                <router-view></router-view>
              </div>
           </main>
           </div> 
         </div>
       </div>
       <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
