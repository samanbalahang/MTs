@section("sidebar")
<aside class="col-12 col-md-2 p-0 bg-black">
    <nav class="" id="sidebarMenu">
        <div class="pt-6">
            <ul class="nav nav-tabs mb-3" id="myTab0" role="tablist">
            <li class="nav-item" role="presentation">
                    <a class="nav-link" id="page-tab0" role="tab" type="button" href="#">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>برگه ها </span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="{{route('pages.index')}}">همه برگه ها</a></li>
                        <li><a href="{{route('pages.create')}}">افزودن جدید</a></li>
                    </ul>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="page-tab0" role="tab" type="button" href="#">
                    <i class="far fa-play-circle fa-fw me-3"></i><span>فیلمها </span>
                </a>
                <ul class="absolute-menu submenu">
                    <li><a href="{{route('movies.index')}}">همه فیلمها</a></li>
                    <li><a href="{{route('movies.create')}}">افزودن جدید</a></li>
                </ul>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="page-tab0" role="tab" type="button" href="#">
                    <i class="fas fa-book fa-fw me-3"></i><span>کتاب ها </span>
                </a>
                <ul class="absolute-menu submenu">
                    <li><a href="{{route('books.index')}}">همه کتابها</a></li>
                    <li><a href="{{route('books.create')}}">افزودن جدید</a></li>
                </ul>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="page-tab0" role="tab" type="button" href="#">
                    <i class="fas fa-microphone-alt	 fa-fw me-3"></i><span>پادکست ها </span>
                </a>
                <ul class="absolute-menu submenu">
                    <li><a href="{{route('podcasts.index')}}">همه پادکست ها</a></li>
                    <li><a href="{{route('podcasts.create')}}">افزودن جدید</a></li>
                </ul>
            </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="minimized" aria-selected="false" class="nav-link" data-mdb-target="#minimized0"
                       data-mdb-toggle="tab"
                       id="minimized-tab0" role="tab" type="button">
                        <i class="fas fa-cog fa-fw me-3"></i><span>جمع کردن فهرست</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
@show
