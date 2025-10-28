@props(['text', 'image' => null])

<div class="relative h-[100px] sm:h-[150px] md:h-[200px] bg-gray-800">
    <!-- Background Image -->
    <div class="absolute inset-0">
        @if($image)
            <img class="w-full h-full object-cover" src="{{ $image }}" alt="Page Header Background">
        @else
            <picture>
                <img
                    sizes="(max-width: 1530px) 100vw, 1530px"
                    srcset="
                    {{ asset('img/11665_dpn1fx_c_scale,w_300.jpg') }} 300w,
                    {{ asset('img/11665_dpn1fx_c_scale,w_813.jpg') }} 813w,
                    {{ asset('img/11665_dpn1fx_c_scale,w_1089.jpg') }} 1089w,
                    {{ asset('img/11665_dpn1fx_c_scale,w_1321.jpg') }} 1321w,
                    {{ asset('img/11665_dpn1fx_c_scale,w_1443.jpg') }} 1443w,
                    {{ asset('img/11665_dpn1fx_c_scale,w_1484.jpg') }} 1484w,
                    {{ asset('img/11665_dpn1fx_c_scale,w_1530.jpg') }} 1530w"
                    src="{{ asset('img/11665_dpn1fx_c_scale,w_1530.jpg') }}"
                    alt="Page Header Background"
                    class="w-full h-full object-cover">
            </picture>
        @endif
        <div class="absolute inset-0 bg-gray-700 mix-blend-multiply opacity-60"></div>
    </div>

    <!-- Title Box -->
    <div class="relative h-full z-10 flex items-center justify-center ">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl m-6 font-extrabold tracking-tight text-white">{{ $text }}</h1>
    </div>
</div>
