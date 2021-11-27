@include('backend.partials.header')
<div class="d-flex" id="page-columns">
    <div class=" bg-dark"  id="sidebar" style="transition: all linear 300ms;">
        <div class="py-4">
            <div class="logo">
                <img class="img-fluid bg-white rounded-circle p-1" src="assets/images/logo.svg" alt="" width="50">
                <span class="ml-3 site-title font-weight-bold"><span class="link-title">Dashboard kit</span> </span>
            </div>
        </div>

        <div class="nav sidebar-links-top flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="link-wrapper active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-chart-pie"></i><span class="link-title">Overview</span></a>
            <a class="link-wrapper" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-ticket-alt"></i><span class="link-title">Tickets</span></a>
            <a class="link-wrapper" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-lightbulb"></i><span class="link-title">Ideas</span></a>
            <a class="link-wrapper" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-users"></i><span class="link-title">Contacts</span></a>
            <div class="minimize"><i class="fas fa-ellipsis-h"></i></div>
        </div>
    </div>
    <div class="body-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light body-nav">
            <a class="navbar-brand" href="#">Overview</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 custom-search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0 custom-search-icon" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <div><a href=""><i class="fas fa-bell custom-bell"></i></a></div>
                <div class="vertical-line"></div>
                <div class="user-meta d-flex align-items-center">
                    <ul class="p-0 m-0 ">
                        <li class="username mr-3 nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                    <div class="user-img">
                        <img src="{{ asset('') }}ecommerce/assets/images/userimg.png" alt="">
                    </div>
                </div>
            </div>
        </nav>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                @include('backend.partials.overview')

            </div>


            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">2222222</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">333333333</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">444444</div>
        </div>
    </div>
</div>

@include('backend.partials.footer')
