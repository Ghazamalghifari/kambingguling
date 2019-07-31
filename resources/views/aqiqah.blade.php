<div class="container"> 
<div class="features-1">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto"> 
              <h1 class="title" style="color:#333333;">AQIQAH</h1>
            </div>
          </div>
          </div>

<div class="row">
<div class="col-md-6 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;">
    <div class="card cards card-pricing">    
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/sate.jpg') }}">
            </div>
        </a>
        <div class="card-content">  
            <h4 class="card-category text-info"><b>Paket Hemat</b></h4>     
            <b style="color:#d21f30;font-size:35px">Rp.1.300.000</b> <hr>             
                                                <ul>
                                                <li>Sate 150 Tusuk</li>
                                                <li>Gulai ±50 porsi</li>
                                                <li>Gratis Ongkos Kirim</li>
                                                <li>Gratis Kartu Aqiqah</li>
                                                <li>Gratis Sertifikat Aqiqah</li>
                                                <li>Tersedia Olahan Malbi, Sop & Tongseng</li> 
                                                </ul>
            <a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesan Sekarang</a> 
        </div> 
    </div>
</div> 
     
<div class="col-md-6 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;">
    <div class="card cards card-pricing">    
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/malbi.jpg') }}">
            </div>
        </a>
        <div class="card-content">  
            <h4 class="card-category text-info"><b>Paket Standard</b></h4>    
            <b style="color:#d21f30;font-size:35px">Rp.1.500.000</b> <hr>      
                                                <ul>
                                                <li>Sate 180 Tusuk</li>
                                                <li>Gulai ±60 porsi</li>
                                                <li>Gratis Ongkos Kirim</li>
                                                <li>Gratis Kartu Aqiqah</li>
                                                <li>Gratis Sertifikat Aqiqah</li>
                                                <li>Tersedia Olahan Malbi, Sop & Tongseng</li> 
                                                </ul>
            <a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesan Sekarang</a> 
        </div> 
    </div>
</div> 

<div class="col-md-6 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;">
    <div class="card cards card-pricing">    
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/gulai.jpg') }}">
            </div>
        </a>
        <div class="card-content">  
            <h4 class="card-category text-info"><b>Paket Spesial</b></h4>    
            <b style="color:#d21f30;font-size:35px">Rp.1.800.000</b> <hr>             
                                                <ul>
                                                <li>Sate 210 Tusuk</li>
                                                <li>Gulai ±70 porsi</li>
                                                <li>Gratis Ongkos Kirim</li>
                                                <li>Gratis Kartu Aqiqah</li>
                                                <li>Gratis Sertifikat Aqiqah</li>
                                                <li>Tersedia Olahan Malbi, Sop & Tongseng</li> 
                                                </ul>                             
                                                @if(Agent::isMobile())
                                                    @else
                                                 <br><br>
                                                    @endif
            <a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesan Sekarang</a> 
        </div> 
    </div>
</div> 
     
<div class="col-md-6 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;">
    <div class="card cards card-pricing">    
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/guling.jpg') }}">
            </div>
        </a>
        <div class="card-content">  
            <h4 class="card-category text-info"><b>Paket Kambing Guling</b></h4>     
            <b style="color:#d21f30;font-size:35px">Rp.2.100.000</b> <hr>   
            <ul>
                                                <li>Untuk 60 porsi</li>
                                                <li>1 kambing guling spesial</li>
                                                <li>40 lontong</li>
                                                <li>1 pemanas</li>
                                                <li>60 piring &amp; sendok</li>
                                                <li>1 waitress</li>
                                                <li>Sambal Kecap Komplit</li>
                                                </ul>
                                                                             
                                                @if(Agent::isMobile())
                                                    @else
                                                 <br>
                                                    @endif  
            <a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesan Sekarang</a> 
        </div> 
    </div>
</div> 
       
</div>
</div>