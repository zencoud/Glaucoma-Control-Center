@props(['text', 'image' => null, 'breadcrumbs' => null, 'breadcrumbStyle' => 'default'])

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

    <!-- Breadcrumbs -->
    @if($breadcrumbs && count($breadcrumbs) > 0)
        <nav class="relative z-10 pt-4 px-4 sm:px-6 lg:px-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                @foreach($breadcrumbs as $index => $breadcrumb)
                    @if($index > 0)
                        <li class="flex items-center">
                            @if($breadcrumbStyle === 'primary')
                                <svg class="w-4 h-4 text-primary/70 mx-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            @elseif($breadcrumbStyle === 'secondary')
                                <svg class="w-4 h-4 text-secondary/80 mx-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            @elseif($breadcrumbStyle === 'gradient')
                                <svg class="w-4 h-4 text-white/60 mx-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            @else
                                <svg class="w-4 h-4 text-gray-300 mx-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            @endif
                        </li>
                    @endif
                    <li class="flex items-center">
                        @if(isset($breadcrumb['url']) && $index < count($breadcrumbs) - 1)
                            @if($breadcrumbStyle === 'primary')
                                <a href="{{ $breadcrumb['url'] }}" 
                                   class="text-primary/80 hover:text-primary hover:bg-white/10 px-2 py-1 rounded transition-all duration-200 font-medium"
                                   aria-current="false">
                                    {{ $breadcrumb['text'] }}
                                </a>
                            @elseif($breadcrumbStyle === 'secondary')
                                <a href="{{ $breadcrumb['url'] }}" 
                                   class="text-secondary hover:text-white hover:bg-secondary/20 px-2 py-1 rounded transition-all duration-200 font-medium"
                                   aria-current="false">
                                    {{ $breadcrumb['text'] }}
                                </a>
                            @elseif($breadcrumbStyle === 'gradient')
                                <a href="{{ $breadcrumb['url'] }}" 
                                   class="text-white/80 hover:text-white hover:bg-gradient-to-r hover:from-primary/20 hover:to-secondary/20 px-2 py-1 rounded transition-all duration-300 font-medium"
                                   aria-current="false">
                                    {{ $breadcrumb['text'] }}
                                </a>
                            @else
                                <a href="{{ $breadcrumb['url'] }}" 
                                   class="text-gray-300 hover:text-white transition-colors duration-200 font-medium"
                                   aria-current="false">
                                    {{ $breadcrumb['text'] }}
                                </a>
                            @endif
                        @else
                            @if($breadcrumbStyle === 'primary')
                                <span class="text-white font-semibold bg-primary/20 px-3 py-1 rounded-full" aria-current="page">
                                    {{ $breadcrumb['text'] }}
                                </span>
                            @elseif($breadcrumbStyle === 'secondary')
                                <span class="text-white font-semibold bg-secondary/30 px-3 py-1 rounded-full" aria-current="page">
                                    {{ $breadcrumb['text'] }}
                                </span>
                            @elseif($breadcrumbStyle === 'gradient')
                                <span class="text-white font-semibold bg-gradient-to-r from-primary/30 to-secondary/30 px-3 py-1 rounded-full shadow-lg" aria-current="page">
                                    {{ $breadcrumb['text'] }}
                                </span>
                            @else
                                <span class="text-white font-semibold" aria-current="page">
                                    {{ $breadcrumb['text'] }}
                                </span>
                            @endif
                        @endif
                    </li>
                @endforeach
            </ol>
        </nav>
    @endif

    <!-- Title Box -->
    <div class="relative h-full z-10 flex items-center justify-center {{ $breadcrumbs && count($breadcrumbs) > 0 ? 'pt-8' : '' }}">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl m-6 font-extrabold tracking-tight text-white">{{ $text }}</h1>
    </div>
</div>
