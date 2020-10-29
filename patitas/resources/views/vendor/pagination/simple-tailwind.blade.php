@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between mt-2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="bg-light p-2">
                Anterior
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="bg-light p-2">
                Anterior
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="bg-light p-2">
                Siguiente
            </a>
        @else
            <span class="bg-light p-2">
                Siguiente
            </span>
        @endif
    </nav>
@endif
