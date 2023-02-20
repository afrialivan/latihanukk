@extends('layouts.main')


@section('container')
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link fs-6 text-primary" aria-current="page" href="#">Semua</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 text-dark" href="#">Belum</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 text-dark" href="#">Proses</a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-6 text-dark" href="#">Selesai</a>
            <hr>
        </li>
    </ul>

    <div class="reports">
        <div class="report">
            <div class="row">
                <div class="col-1">
                    <img src="http://source.unsplash.com/100x100?person" class="rounded-circle d-none d-lg-block"
                        alt="">
                </div>
                <div class="col-12 col-lg-11 col-md-12 col-sm-12">
                    <p class="h4 text-primary">Prall Ivan</p>
                    <p class="fs-6">21 April 2021, 21:00</p>
                    <p class="fs-6" id="isiLaporan">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum quaerat consectetur
                        aliquid ipsam et officiis, inventore nemo accusamus fugit ut fuga rerum cum ab hic esse debitis
                        laudantium maxime tempore illo amet exercitationem ea? Ab itaque blanditiis laboriosam ipsam ratione
                        molestiae ex unde quia! Excepturi maxime et provident nobis veniam ad ex, culpa fugiat laborum
                        voluptates nisi error dicta at, ut accusantium veritatis amet dolorum laudantium quas. Qui
                        repudiandae eligendi repellat quia! Voluptatem commodi repellendus dolores modi, vitae ab adipisci
                        optio, sunt sed reprehenderit a maiores expedita, iste molestiae in delectus magnam voluptate est
                        omnis dolorem! Corporis ad ipsum velit dignissimos, error libero nihil possimus, quidem praesentium
                        quos quae magni facere deserunt commodi vitae a dolor assumenda nulla veritatis provident est!
                        Beatae enim maiores repudiandae doloremque quisquam accusamus debitis ipsam perspiciatis ipsa.
                        Ipsam, veniam inventore dolor eos tempore eaque consequatur aliquam aut repellat labore non quam,
                        neque dolorum odio. Dignissimos vero debitis aliquam quos nisi fugiat delectus a aliquid iusto!
                        Molestias quos, harum sint iste reprehenderit perferendis! Sint rerum mollitia assumenda doloremque
                        qui porro atque at praesentium beatae dolorem ipsam, laboriosam facilis veritatis a perspiciatis
                        soluta adipisci eaque. Dignissimos sapiente quae odit deleniti corporis quos impedit aliquam fugit.
                        At, nobis.</p>
                        <a id="read-more" class="text-decoration-none" href="#">Lihat semua</a>
                        <a id="tutupReadMore" class="text-decoration-none d-none" href="#">Tutup</a>
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection
