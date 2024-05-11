@include('web.includes.header')

<main>
    <section class="py-5 text-center container bg">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="font-weight-light">Album example</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{asset('web/assets/img/profile.jpg')}}" class="rounded" alt="">
                        <div class="card-body text-center">
                            <h3> Nurul Amin Limon </h3>
                            <h5> Software Engineer </h5>
                            <h6> namin11@gmail.com</h6>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-sm btn-outline-secondary ">
                                        <a href="{{ url('/portfolio') }}">View</a>
                                    </button>
                                </div>
                                <small class="text-muted ">27 Ag 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{asset('web/assets/img/profile.jpg')}}" class="rounded" alt="">
                        <div class="card-body text-center">
                            <h3> Md Omar Faruk </h3>
                            <h5> Software Engineer </h5>
                            <h6> omarfaruk11@gmail.com</h6>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="btn-group ">
                                    <button type="button " class="btn btn-sm btn-outline-secondary ">
                                        <a href="{{ url('/portfolio') }}">View</a>
                                    </button>
                                </div>
                                <small class="text-muted ">29 Ag 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{asset('web/assets/img/profile.jpg')}}" class="rounded" alt="">
                        <div class="card-body text-center">
                            <h3> Mohammadul Kader </h3>
                            <h5> Software Engineer </h5>
                            <h6> mksoikot117@gmail.com</h6>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="btn-group ">
                                    <button type="button " class="btn btn-sm btn-outline-secondary ">
                                        <a href="{{ url('/portfolio') }}">View</a>
                                    </button>
                                </div>
                                <small class="text-muted ">25 Ag 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{asset('web/assets/img/profile.jpg')}}" class="rounded" alt="">
                        <div class="card-body text-center">
                            <h3> Mohammadul Kader </h3>
                            <h5> Software Engineer </h5>
                            <h6> mksoikot117@gmail.com</h6>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="btn-group ">
                                    <button type="button " class="btn btn-sm btn-outline-secondary ">
                                        <a href="{{ url('/portfolio') }}">View</a>
                                    </button>
                                </div>
                                <small class="text-muted ">25 Ag 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{asset('web/assets/img/profile.jpg')}}" class="rounded" alt="">
                        <div class="card-body text-center">
                            <h3> Mohammadul Kader </h3>
                            <h5> Software Engineer </h5>
                            <h6> mksoikot117@gmail.com</h6>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="btn-group ">
                                    <button type="button " class="btn btn-sm btn-outline-secondary ">
                                        <a href="{{ url('/portfolio') }}">View</a>
                                    </button>
                                </div>
                                <small class="text-muted ">25 Ag 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{asset('web/assets/img/profile.jpg')}}" class="rounded" alt="">
                        <div class="card-body text-center">
                            <h3> Mohammadul Kader </h3>
                            <h5> Software Engineer </h5>
                            <h6> mksoikot117@gmail.com</h6>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div class="btn-group ">
                                    <button type="button " class="btn btn-sm btn-outline-secondary ">
                                        <a href="{{ url('/portfolio') }}">View</a>
                                    </button>
                                </div>
                                <small class="text-muted ">25 Ag 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('web.includes.footer')
