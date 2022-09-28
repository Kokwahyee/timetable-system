<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Timetabling System</title>
    </head>
    <body class="mb-6 ">
        
        <nav class="flex justify-between items-center mb-6">
            <a href="/"><img class="w-40" src="{{asset('images/usp-logo.jpg')}}" alt="" class="logo"
            /></a>
            <h1 class="font-bold uppercase text-xl px-2 py-2 font-serif">Timetabling System</h1>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                @php($old_section = auth()->user()->role)
                <li>
                    <span class="font-bold uppercase font-sans text-base p-0"> 
                        Welcome {{auth()->user()->name}}!
                        </span>
                </li>
                <li>
                    
                    <a href="/" class="hover:text-laravel text-base"> <i class="fa-solid fa fa-calendar "></i> Exam/Short Test</a>
                    
                </li>
                <li>
                    
                    <a href="/index1" class="hover:text-laravel text-base"> <i class="fa-solid fa fa-calendar "></i> Group Timetable</a>
                    
                </li>
                @if($old_section == 'admin')
                <li>
                    
                    <a href="/listings/create" class="hover:text-laravel text-base"> <i class="fa-solid fa fa-plus-square "></i> Timeslot</a>
                    
                </li>
                @endif
                @if($old_section == 'admin')
                <li>
                    
                    <a href="/register" class="hover:text-laravel text-base"
                        ><i class="fa-solid fa-user-plus"></i> User</a
                    >
    
                </li>
                @endif
                <li>
                    <form class="inline text-base" method="POST" action="/logout">
                        @csrf
                        <button class="hover:text-laravel">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>

                @else

                
                <li>
                    <a href="/login" class="hover:text-laravel text-base"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                @endauth
            </ul>
        </nav>
        
        

        <main>
            
            {{$slot}}
            
        </main>
        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-20 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
        </footer>
        <x-flash-message />
    </body>
</html>