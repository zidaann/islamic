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

            <div class="bg-green-600 rounded-3xl h-96 flex justify-center items-center gap-3">
                <div class="form-control">
                    <input type="text" placeholder="Search" class="input input-bordered" />
                </div>
            </div>

            <div class="grid grid-flow-col auto-cols-max">
                <div class="card w-96 bg-white shadow-xl">
                    <div class="card-body">
                      <p>Alfa</p>
                    </div>
                  </div>
            </div>

            
        </div>
    </div>
</body>
</html>