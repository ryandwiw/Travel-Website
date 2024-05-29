<div class="container p-3 mt-3">
    <h1 class="text-center fw-bold">Wisata Populer</h1>
    <p class="text-center p-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat a, labore eos maiores in quis libero doloremque beatae adipisci</p>
    <div class="row">
        <div class="owl-carousel owl-theme">
        <div class="item">
           <div class="card position-relative">
                    <img src="{{asset('assets/image/img2.jpg')}}" alt="" class="card-img-top" height="300px" style="object-fit: cover;">
                    <div class="card-text-top position-absolute  start-50 translate-middle-x text-center" style="left: 50%; transform: translateX(-50%); top:20px;">
                        <h5>Tulisan Overlay</h5>
                    </div>
                    <div class="card-text-bottom position-absolute bottom-0 start-50 translate-middle-x" style="margin-bottom: 30px;">
                        <a href="#" class="btn btn-danger">View Details</a>
                    </div>
                </div>
        </div>
        <div class="item">
           <div class="card position-relative">
                    <img src="{{asset('assets/image/img2.jpg')}}" alt="" class="card-img-top" height="300px" style="object-fit: cover;">
                    <div class="card-text-top position-absolute start-50 translate-middle-x text-center" style="left: 50%; transform: translateX(-50%); top:20px;">
                        <h5>Tulisan Overlay</h5>
                    </div>
                    <div class="card-text-bottom position-absolute bottom-0 start-50 translate-middle-x" style="margin-bottom: 30px;">
                        <a href="#" class="btn btn-danger">View Details</a>
                    </div>
                </div>
        </div>
        <div class="item">
           <div class="card position-relative">
                    <img src="{{asset('assets/image/img2.jpg')}}" alt="" class="card-img-top" height="300px" style="object-fit: cover;">
                    <div class="card-text-top position-absolute start-50 translate-middle-x text-center" style="left: 50%; transform: translateX(-50%); top:20px;">
                        <h5>Tulisan Overlay</h5>
                    </div>
                    <div class="card-text-bottom position-absolute bottom-0 start-50 translate-middle-x" style="margin-bottom: 30px;">
                        <a href="#" class="btn btn-danger">View Details</a>
                    </div>
                </div>
        </div>
        <div class="item">
           <div class="card position-relative">
                    <img src="{{asset('assets/image/img2.jpg')}}" alt="" class="card-img-top" height="300px" style="object-fit: cover;">
                    <div class="card-text-top position-absolute start-50 translate-middle-x text-center" style="left: 50%; transform: translateX(-50%); top:20px;">
                        <h5>Tulisan Overlay</h5>
                    </div>
                    <div class="card-text-bottom position-absolute bottom-0 start-50 translate-middle-x" style="margin-bottom: 30px;">
                        <a href="#" class="btn btn-danger">View Details</a>
                    </div>
                </div>
        </div>
        <div class="item">
            <div class="card position-relative">
                     <img src="{{asset('assets/image/img2.jpg')}}" alt="" class="card-img-top" height="300px" style="object-fit: cover;">
                     <div class="card-text-top position-absolute start-50 translate-middle-x text-center" style="left: 50%; transform: translateX(-50%); top:20px;">
                         <h5>Tulisan Overlay</h5>
                     </div>
                     <div class="card-text-bottom position-absolute bottom-0 start-50 translate-middle-x" style="margin-bottom: 30px;">
                         <a href="#" class="btn btn-danger">View Details</a>
                     </div>
                 </div>
         </div>
        </div>
    </div>
    <hr>
</div>

<style>

/* .card-text {
        position: absolute;
        bottom: 20px;
        left: 20px;
        z-index: 1;
    } */

    .card-text-top {
        color:white;
        text-transform: uppercase;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
        z-index: 1;
    }
    .card-text-bottom {
        z-index: 1;
    }
    
    .owl-carousel .item .card .card-body{
        border: 0 !important; 
        padding:0 !important;

    }
    .owl-carousel .card {
        border: none;
        margin-right: 15px;
        margin-left: 15px;
    }
</style>