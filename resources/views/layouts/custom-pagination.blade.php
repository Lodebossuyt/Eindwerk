<div>
    @if ($paginator->hasPages())
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)
        <nav aria-label="Page navigation example"
             class="d-none d-md-inline-flex ms-md-auto">
            <ul class="pagination justify-content-end m-0">
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span aria-hidden="true" class="page-link border-lb bg-licht text-white">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <button type="button" class="page-link border-lb bg-licht text-white"
                           dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                           wire:click="previousPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled"
                           rel="prev" aria-label="@lang('pagination.previous')">Previous</button>
                    </li>
                @endif
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span
                                class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item bg-licht active"
                                    wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}"
                                    aria-current="page">
                                    <span class="page-link border-lb bg-transparent text-white" href="#">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item bg-licht"
                                    wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}"
                                    aria-current="page">
                                    <button type="button" class="page-link border-lb bg-transparent text-white"
                                       wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</button>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="page-item bg-licht">
                        <button type="button" class="page-link border-lb bg-licht text-white"  dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" wire:click="nextPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">Next</button>
                    </li>
                @else
                    <li class="page-item bg-licht disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link border-lb bg-licht text-white" aria-hidden="true">Next</span>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>
