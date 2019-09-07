@if ($paginator->hasPages())
    <nav class="navigation align-center">

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)

            {{-- Array Of Links --}}
            @if (is_array($element))
                <ul class="list-unstyled list-inline">
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">
                            <a class="page-numbers bg-border-color current"><span>{{ $page }}</span></a>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}" class="page-numbers bg-border-color"><span>{{ $page }}</span></a>
                        </li>
                    @endif
                @endforeach
                </ul>
            @endif
        @endforeach
    </nav>
@endif
