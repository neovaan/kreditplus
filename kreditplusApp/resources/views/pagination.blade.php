@if ($paginator->hasPages())
	<div class="pagination">
		 @if (!$paginator->onFirstPage())
           <a href="{{ $paginator->previousPageUrl() }}" class="prev">Previous</a>
        @endif
		
		@foreach ($elements as $element)
			 @foreach ($element as $page => $url)
			 		 <a href="{{ $url }}" class="<?php echo ($page == $paginator->currentPage()) ? 'active' : '' ;?>"  >{{ $page }}</a>
			 @endforeach
		 @endforeach
		 @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="next">Next</a>
        @endif
		
	</div>
@endif