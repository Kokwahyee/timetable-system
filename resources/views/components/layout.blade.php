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
        <style>
            /* Dropdown Button */
            .dropbtn {
            background-color: #ef3b2d;
            color: white;
            padding: 5px;
            font-size: 15px;
            border: none;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdown {
            position: relative;
            display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #ddd;}

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {display: block;}

            /* Change the background color of the dropdown button when the dropdown content is shown */
            .dropdown:hover .dropbtn {background-color: #ef3b2d;}
        </style>
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
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa fa-calendar "></i><b> Timetable</b></button>
                        <div class="dropdown-content">
                            <a href="/exam_index" class="hover:text-laravel text-base"> <i class="fa-solid fa fa-calendar "></i> Exam Timetable</a>
                            <a href="/index" class="hover:text-laravel text-base"> <i class="fa-solid fa fa-calendar "></i> Short Test Timetable</a>
                            <a href="/group_index" class="hover:text-laravel text-base"> <i class="fa-solid fa fa-calendar "></i> Group Timetable</a>
                        </div>
                      </div>
                </li>
                
                <li>
                    
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa fa-plus-square "></i><b> Add Timeslot</b></button>
                        <div class="dropdown-content">
                            @if($old_section == 'admin')
                            <a href="/listings/exam_create" class="hover:text-laravel text-base"> <i class="fa-solid fa fa-plus-square "></i> Exam Timeslot</a>
                            <a href="/listings/create" class="hover:text-laravel text-base"> <i class="fa-solid fa fa-plus-square "></i> Short Test Timeslot</a>
                            @endif
                            <a href="/listings/group_create" class="hover:text-laravel text-base"> <i class="fa-solid fa fa-plus-square "></i> Group Timeslot</a>
                        </div>
                      </div>
                    
                </li>
                
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