@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-sm">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link prev" href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link prev" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <span><i class="bi bi-chevron-left"></i></span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <span><i class="bi bi-chevron-right"></i></span>
                    </a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif

<!-- <nav aria-label="Page navigation example">
    <ul class="pagination pagination-sm">
        <li class="page-item">
            <a class="page-link prev" href="#" aria-label="Previous">
                <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link" href="#">7</a></li>
        <li class="page-item">
            <a class="page-link next" href="#" aria-label="Next">
                <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
            </a>
        </li>
    </ul>
</nav> -->
