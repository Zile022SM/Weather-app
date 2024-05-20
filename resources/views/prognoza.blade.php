@vite('resources/css/app.css')

<div class="container mx-auto ">
    <ul class="flex justify-center items-center flex-col mt-10">
        @foreach ($gradovi as $grad => $temperatura)
            <li>{{ $grad }} - <span class="">@if($temperatura > 18)  <span class="text-red-500"> {{$temperatura }}   </span>°C @else {{$temperatura }}°C @endif </span></li>
        @endforeach
    </ul>
</div>
