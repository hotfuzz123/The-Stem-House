@if ($paginator->hasPages())
    <div class="mbp_pagination mt20">
        <ul class="page_navigation">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link" tabindex="-1"> <span class="flaticon-left-arrow"></span> Trước</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><span class="flaticon-left-arrow"></span> Trước</a>
                </li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($elements as $element)
                <!-- Array Of Links -->
                @foreach ($element as $page => $url)
                    <!--  Use three dots when current page is greater than 4.  -->
                    @if ($paginator->currentPage() > 4 && $page === 2)
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif

                    <!--  Show active page else show the first and last two pages from current page.  -->
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page">
                            <a class="page-link">{{ $page }}<span class="sr-only">(hiện tại)</span></a>
                        </li>
                    @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page === 1)
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif

                    <!--  Use three dots when current page is away from end.  -->
                    @if ($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage() - 1)
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif
                @endforeach
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Tiếp <span class="flaticon-right-arrow-1"></span></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="page-link">Tiếp <span class="flaticon-right-arrow-1"></span></a>
                </li>
            @endif
        </ul>
    </div>
@endif
