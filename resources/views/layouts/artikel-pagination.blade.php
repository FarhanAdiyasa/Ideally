{{-- layouts/artikel-pagination.blade.php --}}

@if ($paginator->hasPages())
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <div class="main-artikel-page disabled">&lt;</div>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="main-artikel-page">&lt;</a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <div class="main-artikel-page disabled">{{ $element }}</div>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <div class="main-artikel-page active" style="background-color:#06c195;
                                ">{{ $page }}</div>
                            @else
                                <a href="{{ $url }}" class="main-artikel-page">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" class="main-artikel-page">&gt;</a>
                @else
                    <div class="main-artikel-page disabled">&gt;</div>
                @endif

@endif
