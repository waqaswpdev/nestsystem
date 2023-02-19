<div class="footable-pagination-wrapper">
    <ul class="pagination justify-content-center">
        <li class="mx-2 footable-page-nav{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}" data-page="first"><a class="footable-page-link" href="{{ $paginator->url($paginator->currentPage()-1) }}">«</a></li> 
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="mx-2 footable-page visible{{ ($paginator->currentPage() == $i) ? ' btn-primary px-2' : '' }}" data-page="1"><a class="footable-page-link{{ ($paginator->currentPage() == $i) ? ' text-white' : '' }}" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
        @endfor 
        <li class="mx-2 footable-page-nav{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}" data-page="last"><a class="footable-page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}">»</a></li>
    </ul>
    