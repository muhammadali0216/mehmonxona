
@if ($paginator->hasPages())
  <ul class="pagination justify-content-end">
      @if ($paginator->onFirstPage())
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">
            <span class="bi bi-chevron-left"></span>
          </a>
        </li>
      @else
            <li class="page-item ">
              <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">
                <span class="bi bi-chevron-left"></span>
              </a>
            </li>
      @endif
      @foreach ($elements as $element)
          @if (is_string($element))
              <li class="disabled"><span>{{ $element }}</span></li>
          @endif
          @if (is_array($element))
              @foreach ($element as $page => $url)
                  @if ($page == $paginator->currentPage())
                      <li class="page-item active">
                          <a class="page-link" href="{{$url}}">{{ $page }}</a>
                      </li>
                  @else
                      <li class="page-item">
                          <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                      <li><a href=""></a></li>
                  @endif
              @endforeach
          @endif
      @endforeach
      @if ($paginator->hasMorePages())
       <li class="page-item next">
          <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
            <span class="bi bi-chevron-right"></span>
          </a>
        </li>
      @else
          <li class="page-item next disabled">
              <a class="page-link" href="#">
                <span class="bi bi-chevron-right"></span>
              </a>
          </li>
      @endif
  </ul>
@endif 

               
               
               
               
