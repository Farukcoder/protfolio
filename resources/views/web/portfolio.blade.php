@include('web.includes.portfolio_header')
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                {{ $allInfo->first_name }}
                <span class="text-primary">{{ $allInfo->last_name }}</span>
            </h1>
            <div class="subheading mb-5">
                {{ $allInfo->address }}, Mobile: {{ $allInfo->phone }},
                <a href="mailto:{{ $allInfo->email }}">{{ $allInfo->email }}</a>
            </div>
            <p class="lead mb-5">{!! $allInfo->description  !!}</p>
            <div class="social-icons">
                <a class="social-icon" href="{{ $allInfo->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                <a class="social-icon" href="{{ $allInfo->skype }}"><i class="fab fa-skype"></i></a>
                <a class="social-icon" href="{{ $allInfo->whatsapp }}"><i class="fab fa-whatsapp"></i></a>
                <a class="social-icon" href="{{ $allInfo->facebook }}"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experience</h2>
            @foreach($allInfo->experiences as $experience)
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">{{ $experience->designation }}</h3>
                        <div class="subheading mb-3">{{ $experience->company_name }}</div>
                        <p>{!! $experience->responsibility !!}</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">{{ date('d M Y', strtotime($experience->start_date)) }} - {{ $experience->end_date ? date('d M Y', strtotime($experience->end_date)) : "Present" }}</span></div>
                </div>
            @endforeach

        </div>
    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Education</h2>
            @foreach($allInfo->educations as $education)
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">{{ $education->campus_name }}</h3>
                        <div class="subheading mb-3">{{ $education->campus_name }}</div>
                        <div>{{ $education->department }}</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">{{ date('M Y', strtotime($education->passing_year)) }}</span></div>
                </div>
            @endforeach
        </div>
    </section>
    <hr class="m-0" />
    <!-- Skills-->
    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Skills</h2>
            <div class="row d-flex">
                <div class="col-md-12">
                    @foreach($allInfo->skills as $skill)
                        <div class="progress yellow">
                            @php
                                $percentageValue = intval($skill->percentage); // Convert percentage string to integer
                            @endphp

                            <span class="progress-right">
                                <span class="progress-bar" style="transform: rotate({{ $percentageValue > 50 ? '180' : ($percentageValue * 3.6) }}deg);"></span>
                            </span>
                            <span class="progress-left">
                                <span class="progress-bar" style="animation: none; transform: rotate({{ $percentageValue > 50 ? (($percentageValue - 50) * 3.6) : '0' }}deg);"></span>
                            </span>
                            <div class="progress-value">{{ $skill->percentage }}</div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>
    <hr class="m-0" />

    <!-- Skills-->
    <section class="resume-section" id="projects">
        <div class="resume-section-content">
            <h2 class="mb-5">Projects</h2>
            <div class="row d-flex">
                <div class="row">
                    @foreach($allInfo->projects as $project)
                        <div class="col-md-4">
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <img class="img-fluid" src="{{ $project->image_url ?? 'https://dummyimage.com/300x150/343a40/6c757d' }}" alt="Project Image">

                                    <div class="p-3">
                                        <h6 class="fw-bolder">{{ $project->title }}</h6>
                                        <p>{{ $project->technology }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>




            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Interests-->
    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <h2 class="mb-5">Interests</h2>
            <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
            <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development
                world.
            </p>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Awards-->
    <section class="resume-section" id="awards">
        <div class="resume-section-content">
            <h2 class="mb-5">Awards & Certifications</h2>
            <ul class="fa-ul mb-0">
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span> Google Analytics Certified Developer
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span> Mobile Web Specialist - Google Certification
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span> 1
                    <sup>st</sup> Place - University of Colorado Boulder - Emerging Tech Competition 2009
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span> 1
                    <sup>st</sup> Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span> 2
                    <sup>nd</sup> Place - University of Colorado Boulder - Emerging Tech Competition 2008
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span> 1
                    <sup>st</sup> Place - James Buchanan High School - Hackathon 2006
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span> 3
                    <sup>rd</sup> Place - James Buchanan High School - Hackathon 2005
                </li>
            </ul>
        </div>
    </section>
</div>

@include('web.includes.portfolio_footer')
