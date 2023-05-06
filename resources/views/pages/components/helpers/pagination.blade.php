@if ($paginator->lastPage() > 1)
    <div>
        <div class="section-pager-bar">
            <!-- SECTION PAGER -->
            <div class="section-pager">

                @foreach (range(1, $paginator->lastPage()) as $page)
                    <div class="section-pager-item @if ($page == $paginator->currentPage()) active @endif">
                        <!-- SECTION PAGER ITEM TEXT -->
                        <a href="{{ $paginator->url($page) }}" class="section-pager-item-text">{{ $page }}</a>
                        <!-- /SECTION PAGER ITEM TEXT -->
                    </div>
                @endforeach
            </div>
            <!-- /SECTION PAGER -->

            <!-- SECTION PAGER CONTROLS -->
            <div class="section-pager-controls">
                <!-- SLIDER CONTROL -->



                <a class="slider-control left @if ($paginator->currentPage() != 1) active @else disabled @endif"
                    href="{{ $paginator->previousPageUrl() }}">

                    <!-- SLIDER CONTROL ICON -->
                    <svg class="slider-control-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /SLIDER CONTROL ICON -->
                </a>
                <!-- /SLIDER CONTROL -->


                <a class="slider-control right  @if ($paginator->currentPage() != $paginator->lastPage()) active @else disabled @endif"
                    href="{{ $paginator->nextPageUrl() }}">
                    <!-- SLIDER CONTROL ICON -->
                    <svg class="slider-control-icon
                icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /SLIDER CONTROL ICON -->
                </a>
                <!-- SLIDER CONTROL -->
                {{-- <a class="slider-control right">
                <!-- SLIDER CONTROL ICON -->
                <svg class="slider-control-icon icon-small-arrow">
                    <use xlink:href="#svg-small-arrow"></use>
                </svg>
                <!-- /SLIDER CONTROL ICON -->
            </a> --}}
                <!-- /SLIDER CONTROL -->
            </div>
            <!-- /SECTION PAGER CONTROLS -->
        </div>
@endif
