<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Login Template by David Grzyb</title>
	<meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">{{ __('Startup') }}</h1>
        </a>

    </header>
    
    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">{{ __('Welcome to Startup') }}</h3>
            <p class="text-gray-600 pt-2">{{ __('Sign in to your account.') }}</p>

        </section>
        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('image.upload') }}"  enctype="multipart/form-data">
                @csrf
                <div class="flex justify-center mt-8">
                   
                    <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">
                        <div class="m-4">
                            <label class="inline-block mb-2 text-gray-500">{{ __('File Upload') }}</label>
                            <div class="flex items-center justify-center w-full">
                                <label
                                    class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <img id="output"  class="scale-75"/>
                                    <div class="flex flex-col items-center justify-center pt-7">
                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                       
                                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            {{ __('Attach a file') }}</p>
                                    </div>
                                    <input type="file" class="opacity-0" name="image" onchange="loadFile(event)" id="image"/>
                                </label>
                            </div>
                        </div>
                        <div class="flex justify-center p-2">
                            <button class="w-full px-4 py-2 text-white bg-blue-500 rounded shadow-xl" type="submit">{{ __('Create') }}</button>
                        </div>
                    </div>
                </form>
                </div> 

        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">{{ __("Don't have an account?") }} <a href="#" class="font-bold hover:underline">{{ __('Sign up') }}</a>.</p>
    </div>

    <footer class="max-w-lg mx-auto flex justify-center text-white">
        <a href="#" class="hover:underline">{{ __('Contact') }}</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">{{ __('Privacy') }}</a>
    </footer>


    <script>
         var loadFile = function(event) {
         var output = document.getElementById('output');
         output.src = URL.createObjectURL(event.target.files[0]);
         output.onload = function() {
         URL.revokeObjectURL(output.src) // free memory
    }
  };
      </script>
</body>
</html>

