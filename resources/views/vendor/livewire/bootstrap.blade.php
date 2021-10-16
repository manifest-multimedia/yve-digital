<div>
    @if ($paginator->hasPages())
        <nav>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" style="padding:0px 0px 0px 4px">
                        <span class="page-link btn">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item" style="padding:0px 0px 0px 4px">
                        <button type="button"  class="page-link btn" wire:click="previousPage" wire:loading.attr="disabled" rel="prev">@lang('pagination.previous')</button>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <button type="button" class="page-link btn" wire:click="nextPage" wire:loading.attr="disabled" rel="next">@lang('pagination.next')</button>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link btn">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>