<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 d-none d-lg-block mt-5">
            <h3 class="fw-bold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam laboriosam itaque </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus similique doloribus quasi qui excepturi quaerat, incidunt vitae distinctio. Rem omnis iusto eligendi possimus tenetur quis ducimus aut odit eum. Et.</p>
            <a href="#" class="btn btn-danger">Klik</a>
        </div>
        
        <div class="col-md-7">
            <img src="{{asset('assets/image/img2.jpg')}}" alt="" class="img-fluid img-border-radius-10">
            
        </div>
        <div class="col-md-5 d-lg-none d-md-none">
            <h3 class="fw-bold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam laboriosam itaque </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus similique doloribus quasi qui excepturi quaerat, incidunt vitae distinctio. Rem omnis iusto eligendi possimus tenetur quis ducimus aut odit eum. Et.</p>
            <a href="#" class="btn btn-danger">Klik</a>
        </div>
    </div>
</div>

<style>
    .img-border-radius-10{
        border-radius: 10px;
        /* clip-path: polygon(0% 0%, 83% 9%, 91% 42%, 75% 100%, 0% 100%); */
        clip-path: polygon(26% 10%, 100% 0%, 100% 100%, 19% 100%, 6% 41%) !important;
        /* clip-path: polygon(11% 6%, 100% 0%, 100% 100%, 20% 100%, 7% 44%); */
    }

    @media(max-width:767px){
        .img-border-radius-10{
            height: 300px;
        }
    }
</style>