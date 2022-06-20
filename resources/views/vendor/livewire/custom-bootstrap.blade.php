<div>
    @if ($paginator->hasPages())
        <div class="d-flex">
            <nav>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">@lang('pagination.previous')</span>
                        </li>
                    @else
                        @if(method_exists($paginator,'getCursorName'))
                            <li class="page-item">
                                <button dusk="previousPage" type="button" class="page-link"
                                        wire:click="setPage('{{$paginator->previousCursor()->encode()}}','{{ $paginator->getCursorName() }}')"
                                        wire:loading.attr="disabled" rel="prev">@lang('pagination.previous')</button>
                            </li>
                        @else
                            <li class="page-item">
                                <button type="button"
                                        dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                                        class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                        wire:loading.attr="disabled" rel="prev">@lang('pagination.previous')</button>
                            </li>
                        @endif
                    @endif

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        @if(method_exists($paginator,'getCursorName'))
                            <li class="page-item">
                                <button dusk="nextPage" type="button" class="page-link"
                                        wire:click="setPage('{{$paginator->nextCursor()->encode()}}','{{ $paginator->getCursorName() }}')"
                                        wire:loading.attr="disabled" rel="next">@lang('pagination.next')</button>
                            </li>
                        @else
                            <li class="page-item">
                                <button type="button"
                                        dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                                        class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                        wire:loading.attr="disabled" rel="next">@lang('pagination.next')</button>
                            </li>
                        @endif
                    @else
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">@lang('pagination.next')</span>
                        </li>
                    @endif

                </ul>
            </nav>

            <div class="page-item" style="margin: 0 5px">
                Jump to Page
                {{-- Pagination Elements --}}
                <select class="form-control" title="" style="width: 80px" wire:model="page" wire:change="gotoPage($event.target.value)">
                    @for($i=1; $i<=$paginator->lastPage(); $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="page-item" style="margin: 0 5px">
                Items Per Page

                <select class="form-control" title="" style="width: 80px" wire:model="items_per_page">
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
            </div>
        </div>
    @endif
</div>
