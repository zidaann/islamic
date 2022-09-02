<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
    <style>
        html,body{
            font-family: 'Inter', sans-serif;
        }
    </style>

</head>
<body>
    <div class="bg-white bg-cover min-h-screen">
        <div class="md:container md:mx-auto px-2">
            <x-navbar></x-navbar>
        </div>


        
        {{-- <div class="bg-green-600 rounded-3xl h-96 flex justify-center items-center gap-3">
            <a href="#" class=" hover:scale-110 ease-in-out duration-300 shadow-lg">
                <div class="card  bg-white shadow-xl">
                    <div class="card-body text-center font-semibold">
                       Al-Quran
                    </div>
                </div>
            </a>
            <a href="#" class="hover:scale-110 ease-in-out duration-300 shadow-lg">
                <div class="card  bg-white shadow-xl">
                    <div class="card-body text-center font-semibold">
                       Doa Harian
                    </div>
                </div>
            </a>
            <a href="#" class="hover:scale-110 ease-in-out duration-300 shadow-lg">
                <div class="card  bg-white shadow-xl">
                    <div class="card-body text-center font-semibold">
                       Kisah Nabi dan Rasul
                    </div>
                </div>
            </a>
            <a href="#" class="hover:scale-110 ease-in-out duration-300 shadow-lg">
                <div class="card  bg-white shadow-xl">
                    <div class="card-body text-center font-semibold">
                       Bacaan Shalat
                    </div>
                </div>
            </a>
        </div> --}}
    </div>
</body>
</html>