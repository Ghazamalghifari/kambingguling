<div class="container"> 
<div class="features-1">
          <div class="row">
            <div class="col-md-12 ml-auto mr-auto"> 
              <h1 class="title" style="color:#333333;">KAMBING GULING</h1>
            </div>
          </div>
          </div>

<div class="row">
<div class="col-md-6 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;">
                                            <div class="card cards card-pricing"> 
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/guling1.jpg') }}">
            </div>
        </a>
                                                <div class="card-content">  
                                                <h4 class="card-category text-info"><b>   PAKET STANDARD </b></h4>
                                                <b style="color:#d21f30;font-size:35px">Rp. {{ $kambingguling->harga_1 }}  </b> <hr>  
                                                 
                                                <ul>
                                                <li>1 kambing guling muda</li>
                                                <li>Berat : &nbsp;5 - 6 Kg</li>
                                                <li>Porsi : 25 - 30 Porsi</li>
                                                <li>Tambahan : Sambal kecap komplit & Gulai</li>
                                                <li>Minimal Order : 1 Ekor</li>
                                                <li>Pengiriman : Gratis Wilayah Bandar Lampung</li>
                                                </ul>     
                                                    <a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesan Sekarang</a> 
                                                </div> 
                                            </div>
</div> 
     
<div class="col-md-6 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;">

<div class="card cards card-pricing"> 
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/guling2.jpg') }}">
            </div>
        </a>
                                                <div class="card-content">  
                                                <h4 class="card-category text-info"><b>   PAKET MEDIUM</b></h4>
                                                <b style="color:#d21f30;font-size:35px">Rp. {{ $kambingguling->harga_2 }}  </b> <hr>  
                                                <ul>
                                                <li>1 kambing guling Muda</li>
                                                <li>Berat : &nbsp;7 - 8 Kg</li>
                                                <li>Porsi : 30 - 40 Porsi</li>
                                                <li>Tambahan : Sambal kecap komplit & Gulai</li>
                                                <li>Minimal Order : 1 Ekor</li>
                                                <li>Pengiriman : Gratis Wilayah Bandar Lampung</li>
                                                </ul>   
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
                                                <h4 class="card-category text-info"><b>   PAKET SPESIAL</b></h4>
                                                <b style="color:#d21f30;font-size:35px">Rp. {{ $kambingguling->harga_3 }} </b> <hr> 
                                                
                                                <ul> 
                                                <li>1 kambing guling spesial</li>
                                                <li>Berat : &nbsp;9 - 10 Kg</li>
                                                <li>Porsi : 50 - 60 Porsi</li>
                                                <li>Tambahan : Sambal kecap komplit & Gulai</li>
                                                <li>Minimal Order : 1 Ekor</li>
                                                <li>Pengiriman : Gratis Wilayah Bandar Lampung</li>   
                                                @if(Agent::isMobile())<br>
                                                    @else
                                                    <br>     <br>
                                                    @endif
                                                </ul>          
                                                    <a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesan Sekarang</a> 
                                                </div> 
                                            </div>
</div> 
     
<div class="col-md-6 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;">
 
<div class="card cards card-pricing"> 
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/guling3.jpg') }}">
            </div>
        </a>
                                                <div class="card-content">  
                                                <h4 class="card-category text-info"><b>PAKET KOMPLIT</b></h4>
                                                <b style="color:#d21f30;font-size:35px">Rp. {{ $kambingguling->harga_4 }} </b> <hr>
                                                <ul>
                                                <li>Untuk 60 porsi</li>
                                                <li>1 kambing guling spesial</li>
                                                <li>40 lontong</li>
                                                <li>1 pemanas</li>
                                                <li>1 waitress</li>
                                                <li>Sambal Kecap Komplit</li>  
                                                <li>Pengiriman : Gratis Wilayah Bandar Lampung</li>       
                                                @if(Agent::isMobile())
                                                    @else
                                                    <br>
                                                    @endif
                                                </ul>  
                                                    <a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesan Sekarang</a> 
                                                </div> 
                                            </div>
</div> 
       
</div>
</div>