@include('web.includes.header')

<main>
    <section class="py-5 text-center bg-full container-fluid">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <!-- Content removed -->
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                @foreach($informations as $information)
                    <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('admin/assets' . ($information->photo ? '/photo/' . $information->photo : '/dist/img/user4-128x128.jpg')) }}" class="rounded" alt="">
                        <div class="card-body text-center">
                            <h5> {{ $information->first_name }} {{ $information->last_name }} </h5>
                            <h6>
                                <a href="{{ $information->facebook }}"><i class="fa-brands fa-facebook"></i></a> <a href="{{ $information->linkedin }}"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="{{ $information->skype }}"><i class="fa-brands fa-skype"></i></a>
                                <a href="{{ $information->whatsapp }}"><i class="fa-brands fa-square-whatsapp"></i></a>
                            </h6>
                            <b> {{ $information->email }} </b>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-sm btn-outline-secondary ">
                                        <a href="{{ route('portfolio.show', encrypt($information->id)) }}">View</a>
                                    </button>
                                </div>
                                <small class="text-muted ">{{ date('d M Y', strtotime($information->created_at)) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $informations->links() }}
        </div>
    </div>
</main>

@include('web.includes.footer')
