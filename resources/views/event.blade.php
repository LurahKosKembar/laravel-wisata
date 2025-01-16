    @extends('layouts.app')

    @section('title', 'Event Page')
    @section('contents')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Event</h6>
                <h1 class="mb-5">Singphoria</h1>
            </div>

            <div class="wow zoomIn" data-wow-delay="0.3s">
                <div class="position-relative d-flex justify-content-center overflow-hidden">
                    <div class="w-75">
                        <img class="w-100 rounded-3" src="{{asset('img/event-musik.jpeg')}}" alt="">
                        <div class="mt-4 text-dark">
                            <p>
                                SINGPHORIA HADIR DI PONOROGO !!!
                            </p>

                            <br>

                            <p>
                                Singphoria adalah wadah kolaborasi antara musik dan berbagai pilar industri kreatif khususnya kuliner dan lifestyle. Fun, enjoy and sing along merupakan ide besar yang kami bungkus dalam Singphoria.
                            </p>

                            <br>

                            <p>
                                Singphoria Ponorogo kali ini berbeda dengan konser Singphoria di kota-kota lain sebelumnya. Kali ini Singphoria akan hadir bukan cuma sehari, tapi konser bakal berlangsung dua hari! Jadi dijamin lebih seru dan kamu bakal nyesel kalo sampe kehabisan tiketnya dan seru-seruan bareng kita.
                            </p>

                            <p>
                                Artisnya?
                                Hari 1 ada NDX AKA, KELUD PRODUCTION/DJ TANTI, PRISA
                                Hari 2 ada REBELLION ROSE, KARNA MEREKA, PRISA
                                Dan akan bertambah lagi!
                            </p>

                            <p>
                                Awas, jangan salah beli tanggal tiketnya ya.
                            </p>

                            <p>
                                Follow media sosial Singphoria Pekalongan di @singphoriapnrg dan gabung grup WA untuk info lebih cepat di nomor 081228555516.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection