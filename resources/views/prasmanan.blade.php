<div class="container"> 
    <div class="features-1">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto"> 
              <h1 class="title" style="color:#333333;">PAKET PRASMANAN</h1>
            </div>
        </div>
    </div>
<div class="row">
<div class="col-md-4 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;"> 
                                            <div class="card cards card-pricing"> 
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/prasmanan3.jpg') }}">
            </div>
        </a>
                                                <div class="card-content">  
                                                <h3 class="card-category text-info"><b>Paket A</b></h3> 
                                                <b style="color:#d21f30;font-size:35px">Rp. {{ $prasmanan->harga_1 }}</b> <hr>                                                                    
                                                <ul>
                                                <li>Nasi Putih</li>
                                                <li>Aneka Shop/CapCay</li>
                                                <li>Sambel Kentang</li>
                                                <li>Olahan Daging/Ayam/Ikan</li>
                                                <li>Krupuk</li>
                                                <li>Buah</li>   
                                                <li>Air Mineral</li>                           
                                                @if(Agent::isMobile())
                                                    @else
                                                <li>-</li>   
                                                <li>-</li>    <br>
                                                    @endif
                                                </ul>    
                                                    <a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesan Sekarang</a> 
                                                </div> 
                                            </div>
                                        </div> 
<div class="col-md-4 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;">
                                            <div class="card cards card-pricing"> 
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/prasmanan2.jpg') }}">
            </div>
        </a>
                                                <div class="card-content">  
                                                <h3 class="card-category text-info"><b>Paket B</b></h3> 
                                                <b style="color:#d21f30;font-size:35px">Rp. {{ $prasmanan->harga_2 }}</b> <hr>                                                                    
                                                <ul>
                                                <li>Nasi Putih</li>
                                                <li>Aneka Shop/CapCay</li>
                                                <li>Sambel Kentang</li>
                                                <li>Olahan Daging/Ayam</li>
                                                <li>Olahan Ikan</li>
                                                <li>Krupuk</li>
                                                <li>Buah</li>
                                                <li>Air Mineral</li>                    
                                                @if(Agent::isMobile())
                                                    @else  
                                                <li>-</li>   <br>
                                                    @endif
                                                </ul>                 
                                                    <a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesan Sekarang</a> 
                                                </div> 
                                            </div>
                                        </div> 
                                         
<div class="col-md-4 col-sm-6 col-xs- 6list-produk " style=" margin-bottom:10px;">
                                            <div class="card cards card-pricing"> 
        <a href="url('') ">
            <div class="card-image">
                <img alt="" data-src="{{ asset('image/prasmanan1.jpg') }}">
            </div>
        </a>
                                                <div class="card-content">  
                                                <h3 class="card-category text-info"><b>Paket C</b></h3>
                                                <b style="color:#d21f30;font-size:35px">Rp. {{ $prasmanan->harga_3 }}</b> <hr>  
                                                <ul>
                                                <li>Nasi Putih</li>
                                                <li>Aneka Shop/CapCay</li>
                                                <li>Sambel Kentang</li>
                                                <li>Olahan Daging</li>
                                                <li>Olahan Ayam</li>
                                                <li>Olahan Ikan</li>
                                                <li>Krupuk</li>
                                                <li>Buah</li>
                                                <li>Air Mineral</li>                  
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