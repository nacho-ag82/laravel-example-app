<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{config('app.name','Laravel')}}</title>
<!--fONTS-->
    <link rel="preconnect" href="https://fonts.bunny.net"&gt;/>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"&quot; rel="stylesheet"/>
<!--sCRIPTS-->
    <script src="https://cdn.tailwindcss.com"&gt;></script>
</head>
<body style="font-family: 'figtree', sans-serif;">
    
      <!--Cabecera de página-->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{$header}}
                </div>
            </header>
        @endisset
        <!--Contenido de página-->
        <main>
           {{$slot}}
           
        </main>
    </div>
</body></html>