<x-app-layout>
      
    <div class="container">
        
        <div class="show">
            <div class="col-md-10 show-body  p-4">
                <h1>{{ $datas['nama'] }} </h1>
                <div class="show-desc  ">
                    <div class="show-desc-left ">
                        <h3>Nama</h3>
                        <h3>Nomor urut</h3>
                        <h3>Arti</h3>
                        <h3>Tempat turun</h3>
                        <h3>Jumlah ayat</h3>
                    </div>
                    <div class="show-desc-right ">
                        <h3>: {{ $datas['nama_latin'] }}</h3>
                        <h3>: {{ $datas['nomor'] }}</h3>
                        <h3>: {{ $datas['arti'] }}</h3>
                        <h3>: {{ $datas['tempat_turun'] }}</h3>
                        <h3>: {{ $datas['jumlah_ayat'] }} ayat</h3>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="col-md audio py-3 ">
            <div class="title">Play Audio</div>
            <audio controls >
            <source src="{{ $datas['audio'] }}" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
        </div>
        @foreach ($datas['ayat'] as $data)
        <div class="show-surah">
            <div class="show-ayat">
                <h6>{{ $data['nomor'] }}</h6>
                <div class="show-ayat-detail ">
                   {{ $data['ar'] }}
                </div>
                <h5>{{ $data['idn'] }}</h5>
                
            </div>
        </div>
                    
        @endforeach
    </div>   
</x-app-layout>