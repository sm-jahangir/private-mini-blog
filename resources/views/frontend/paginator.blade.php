@if ($paginator->hasPages())
        @if ($paginator->onFirstPage())
            <a class="prev page-numbers disabled" href="#">Previous</a>
        @else
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}">Previous</a>
        @endif
        @foreach ($elements as $element)
    
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
                <a class="page-numbers disabled" href="#"><span class="meta-nav screen-reader-text">Page
                    </span>{{ $element }}</a>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="page-numbers current" href="#"><span class="meta-nav screen-reader-text">Page
                            </span>{{ $page }}</a>
                    @else
                        <a class="page-numbers" href="{{ $url }}"><span class="meta-nav screen-reader-text">Page
                            </span>{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">Next</a>
        @else
            <a class="next page-numbers disabled" href="#">Next</a>
        @endif
@endif