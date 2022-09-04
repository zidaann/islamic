<x-app-layout>
    <div class="container">
        <div class="jumbotron">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-6 ">
                    <div class="col-md d-flex justify-content-center mb-4">
                        <img src="/img/svg/quran.svg" alt="" width="150" class="img-fluid"> 
                    </div>
                    <form class="d-flex align-items-center" role="search">
                        <i class="bi bi-search"></i>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>

        <div class="surah ">
            <div class="title">
                Daftar Surah
            </div>
            <div class="surah-body">
                @foreach ($datas as $data)
                    <a href="{{ route('quran.show', $data['nomor']) }}">
                        <div class="box-surah">
                            <div class="box-desc ">
                                <div class="box-number">
                                    <h6>{{ $data['nomor'] }}</h6>
                                </div>
                                <div class="box-body">
                                    <div class="box-left">
                                        <h2>{{ $data['nama_latin'] }}</h2>
                                        <h6>{{ $data['arti'] }}</h6>
                                    </div>
                                    <div class="box-right">
                                        <h2>{{ $data['nama'] }} </h2>
                                        <h6>{{ $data['jumlah_ayat'] }} ayat</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>