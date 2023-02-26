@if ($paginator->hasPages())
<ul class="pagination justify-content-center justify-content-lg-end mb-0">
    @if ($paginator->onFirstPage())
    <li class="page-item mx-1"><a class="page-link py-1" href="#" aria-label="Previous"><span
    aria-hidden="true">«</span></a></li>
    @else
    <li class="page-item mx-1"><a class="page-link py-1" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"><span
    aria-hidden="true">«</span></a></li>
    @endif
    @foreach ($elements as $element)
    @if (is_string($element))
    <li><a class="page-item mx-1 disabled">{{ $element }}</a></li>
    @endif
    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page-item mx-1 active"><a class="page-link py-1">{{ $page }}</a></li>
    @else
    <li class="page-item mx-1"><a class="page-link py-1" href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li class="page-item mx-1"><a class="page-link py-1" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"><span
    aria-hidden="true">»</span></a></li>
    @else
    <li class="page-item mx-1"><a class="page-link py-1 disabled" href="#" aria-label="Next"><span
    aria-hidden="true">»</span></a></li>
    @endif
</ul>
@endif