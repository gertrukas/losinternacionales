@unless ($breadcrumbs->isEmpty())
<div class="container max-w-full bg-black py-2">

        <nav class="container rounded-lg  mx-auto border border-gray-600 bg-gradient-to-r from-slate-500/50 to-slate-800/20">
            <ol class="p-4  flex flex-wrap text-sm text-white">
                <li><i class="fa-solid fa-house pr-6 pb-1"></i></li>

                @foreach ($breadcrumbs as $breadcrumb)

                    @if ($breadcrumb->url && !$loop->last)
                        <li>
                            <a href="{{ $breadcrumb->url }}" class="-breadcrumb-link">
                                {{ $breadcrumb->title }}
                            </a>
                        </li>
                    @else
                        <li>
                            {{ $breadcrumb->title }}
                        </li>
                    @endif

                    @unless($loop->last)
                        <li class="flex items-centerpx-2">
                            <svg class="w-6 h-6 pb-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </li>
                    @endif

                @endforeach
            </ol>
        </nav>

    </div>
@endunless
