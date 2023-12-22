@extends('365jobs.master')

@section('title', 'Welcome')

@section('content')
    <div id="homepage">
        <section id="welcome_section">
            <div class="container">
                <h1 class="d-none">Welcome Page</h1>
                <div class="row justify-content-center justify-content-xl-start">
                    <div class="col-12 col-md-9 col-lg-10 col-xl-5 text-center text-xl-start ps-lg-4">
                        <div class="welcome-text">
                            <h2 id="welcome-reveal"> Let's build your team <strong> together</strong></h2>
                            <p>Torquem detraxit hosti et quidem faciunt, ut calere ignem, nivem esse fugiendum itaque
                                turbent,
                                ut earum rerum necessitatibus saepe eveniet, ut summum bonum.</p>
                            <div
                                class="d-flex flex-column flex-lg-row gap-2 gap-lg-4 justify-content-center justify-content-xl-start align-items-center">
                                <a href="#" class="btn-default">Αναζητας Προσωπικο</a>
                                <a href="#" class="btn-alt">Αναζητας Εργασια</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="category_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-8 col-lg-7 col-xl-6 category-text">
                        <h3 id="category-reveal">Explore by <strong>category</strong></h3>
                        <p>
                            Torquem detraxit hosti et quidem faciunt, ut calere ignem, nivem esse fugiendum itaque turbent,
                            ut
                            earum
                            rerum necessitatibus saepe eveniet, ut summum bonum.
                        </p>
                    </div>
                </div>
                <div class="col-12 swiper category-swiper">
                    <div class="swiper-wrapper">
                        @foreach (range(1, 10) as $i)
                            <div class="swiper-slide">
                                <div class="category position-relative">
                                    <img src="365jobs/images/customerService.webp" alt="Customer Service">
                                    <h4> Customer Service </h4>
                                    @include('365jobs.partials.icons.customerServiceIcon')
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="category-btn">
                    <a href="#" class="btn-default">Ολες οι κατηγοριες</a>
                </div>
            </div>
        </section>
        <section id="about_section">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-11 col-sm-8 col-md-6 col-lg-6 col-xl-5">
                        <div id="about-image-reveal" class="about-image">
                            <img src="/365jobs/images/aboutUs.webp" alt="About us image">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-6 offset-xl-1">
                        <div id="about-reveal" class="about-text">
                            <h3>About us</h3>
                            <div class="title">Probabo inquit sic agam ut labore.</div>
                            <p>
                                At magnum periculum adiit in quo quaerimus, non ero tibique, si ob aliquam quaerat
                                voluptatem accusantium doloremque laudantium, totam rem aperiam eaque gaudere ut ratione
                                intellegi posse et argumentandum et quasi naturalem atque haec subtilius velint tradere et
                                dolorum fuga et quasi naturalem atque corrupti.
                            </p>
                            <a href="#" class="btn-default">Σχετικα με εμας</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="news_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="news-reveal" class="col-11 col-lg-8 col-xl-6 news-text">
                        <h3> News </h3>
                        <div class="title">Et quidem rerum facilis est <strong>primum igitu</strong>
                            quid malum sensu
                        </div>
                    </div>
                </div>
                <div class="swiper news-swiper">
                    <div class="swiper-wrapper">
                        @foreach (range(1, 4) as $i)
                            <div class="swiper-slide">
                                <div class="post">
                                    <div class="date">
                                        4 Σεπτ. 2024
                                    </div>
                                    <h4>
                                        Αναζήτηση Ταλέντων: Αναθεώρηση στην Στρατηγική Πρόσληψης
                                    </h4>
                                    <p>
                                        Torquem detraxit hosti et quidem faciunt, ut calere ignem, nivem esse fugiendum
                                        itaque
                                        turbent, ut earum rerum.
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-2"><a href="#" class="ms-auto me-auto btn-default">Ολα
                            τα νεα</a></div>
                </div>
            </div>
        </section>
        <section id="contact_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="d-none d-lg-block col-lg-6 col-xl-5">
                        <div id="contact-reveal" class="contact-text">
                            <h3>Contact us</h3>
                            <div class="title">Let’s build your team together</div>
                            <p>Torquem detraxit hosti et quidem faciunt, ut calere ignem, nivem esse fugiendum itaque
                                turbent, ut earum rerum necessitatibus saepe eveniet, ut summum bonum.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 offset-xl-1">
                        <h3 id="contact-reveal" class="d-block d-lg-none">Contact us</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <label class="form-label" for="first__name">First Name<sup>*</sup></label>
                                    <input class="form-control" type="text" id="first__name" placeholder="First Name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label" for="last__name">Last Name<sup>*</sup></label>
                                    <input class="form-control" type="text" id="last__name" placeholder="Last Name">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="email">Email<sup>*</sup></label>
                                    <input class="form-control" type="email" id="email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="message">Leave us a message<sup>*</sup></label>
                                    <textarea class="form-control" id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 d-flex align-items-center">
                                    <input id="checkbox" type="checkbox" />
                                    <label class="form-label" for="checkbox"> I agree with <a href="#">Terms of
                                            Use</a>.</label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-default" onclick="{return false}">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@push('scripts')
    <script>
        const categorySwiper = new Swiper.default(".category-swiper", {
            breakpoints: {
                0: {
                    spaceBetween: 20,
                    slidesPerView: 1.5,
                    centeredSlides: true,
                },
                576: {
                    spaceBetween: 20,
                    slidesPerView: 2,
                    centeredSlides: true,
                },
                768: {
                    spaceBetween: 25,
                    slidesPerView: 2.5,
                    centeredSlides: true,
                },
                992: {
                    spaceBetween: 25,
                    slidesPerView: 3,
                    centeredSlides: false,
                },
                1200: {
                    spaceBetween: 30,
                    slidesPerView: 3.5,
                    centeredSlides: false,
                },
                1400: {
                    spaceBetween: 35,
                    slidesPerView: 4,
                    centeredSlides: false,
                },
            },
        });

        categorySwiper.on('slideChange', () => {
            let list = []

            if ((categorySwiper.activeIndex) % 2) {
                for (var i = 0; i < categorySwiper.slides.length; i += 2) {
                    list.push(categorySwiper.slides[i]);
                }
            } else {
                for (var i = 1; i < categorySwiper.slides.length; i += 2) {
                    list.push(categorySwiper.slides[i]);
                }
            }

            categorySwiper.slides.forEach(slide => {
                slide.style["padding-top"] = "unset"
                slide.style["margin-bottom"] = "50px"
            })

            list.forEach(slide => {
                slide.style["margin-bottom"] = "unset"
                slide.style['padding-top'] = "50px"
            });
        })


        const newsSwiper = new Swiper.default('.news-swiper', {
            breakpoints: {
                0: {
                    spaceBetween: 30,
                    slidesPerView: 1,
                },
                576: {
                    spaceBetween: 30,
                    slidesPerView: 1.3,
                },
                768: {
                    spaceBetween: 30,
                    slidesPerView: 1.65,
                },
                992: {
                    spaceBetween: 30,
                    slidesPerView: 2.3,
                },
                1200: {
                    spaceBetween: 40,
                    slidesPerView: 2.65,
                },
                1400: {
                    spaceBetween: 40,
                    slidesPerView: 3,
                },
            },
        })
    </script>

    <script>
        ScrollReveal.default().reveal("#welcome-reveal", {
            origin: "left",
            duration: 750,
            distance: "50px",
            easing: "cubic-bezier(.4,0,.5,1)",
        });

        ScrollReveal.default().reveal("#welcome-reveal > strong", {
            duration: 400,
            delay: 600
        });

        ScrollReveal.default().reveal("#category-reveal", {
            origin: "top",
            duration: 750,
            distance: "10px",
        });

        ScrollReveal.default().reveal("#about-image-reveal", {
            origin: "left",
            duration: 750,
            distance: "10px",
            mobile: false,
        });

        ScrollReveal.default().reveal("#about-reveal", {
            origin: "right",
            duration: 750,
            distance: "10px",
        });

        ScrollReveal.default().reveal("#news-reveal", {
            origin: "top",
            duration: 750,
            distance: "20px",
        });

        ScrollReveal.default().reveal("#contact-reveal", {
            origin: "top",
            duration: 750,
            scale: 0.5,
            distance: "20px",
        });
    </script>
@endpush
