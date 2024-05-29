<section class="testimonial-section">
    <div class="container">
      <div class="row">
        <!-- Tulisan di Sebelah Kiri -->
        <div class="col-md-6 mb-5">
          <div class="">
            <h3 class="fw-bold">Testimoni</h3>
            <h2 style="margin-left: 10px;">Apa Yang Orang Katakan Tentang Kami.</h2>
          </div>
        </div>
  
        <!-- Card di Sebelah Kanan -->
        <div class="col-md-6">
            <div class="testimonial-container">
                
                <div class="testimonial-card active">
                    <div class="testimonial-image">
                        <img src="{{asset('assets/image/img2.jpg')}}" alt="Testimonial Image 1" loading="lazy">
                    </div>
                    <div class="testimonial-text">
                        <p>
                            "Saya sangat puas dengan layanan travel website ini. Antarmuka yang mudah digunakan memudahkan saya menemukan dan memesan paket wisata sesuai keinginan. "
                        </p>
                        <p style="text-align: right;">Anonymous</p>
                    </div>
                   
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{asset('assets/image/img1.jpg')}}" alt="Testimonial Image 2" loading="lazy">

                    </div>
                    <div class="testimonial-text">
                        <p>
                            "Saya baru saja menyelesaikan perjalanan hebat berkat bantuan website travel ini. Mulai dari pemesanan tiket pesawat hingga reservasi hotel, semuanya berjalan lancar. Saya sangat merekomendasikan platform ini kepada teman dan keluarga untuk merencanakan liburan mereka."
                        </p>
                        <p style="text-align: right;">Anonymous</p>
                    </div>
                   
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{asset('assets/image/img3.jpg')}}" alt="Testimonial Image 3" loading="lazy">

                    </div>
                    <div class="testimonial-text">
                        <p>
                            "Pengalaman saya menggunakan website travel ini sangat memuaskan. Diskon dan penawaran khusus yang ditawarkan membuat perjalanan saya lebih terjangkau, dan fitur pencarian yang canggih membantu saya menemukan opsi yang sesuai dengan preferensi saya."
                        </p>
                        <p style="text-align: right;">Anonymous</p>
                    </div>
                   
                </div>
                <div class="testimonial-buttons">
                    <button class="testimonial-button active" onclick="showTestimonial(0)">1</button>
                    <button class="testimonial-button" onclick="showTestimonial(1)">2</button>
                    <button class="testimonial-button" onclick="showTestimonial(2)">3</button>
                </div>
            </div>
            

        </div>
      </div>
    </div>
</section> 


<script>
    

function showTestimonial(index) {
    var testimonialCards = document.querySelectorAll('.testimonial-card');
    var buttons = document.querySelectorAll('.testimonial-button');

    // Hide all testimonials with a fade-out effect
    testimonialCards.forEach(card => {
        card.style.opacity = '0';
    });

    // Set a delay to allow the fade-out effect to take place
    setTimeout(function() {
        // Remove 'active' class from all testimonials
        testimonialCards.forEach(card => {
            card.classList.remove('active');
        });

        // Show the selected testimonial with a fade-in effect
        testimonialCards[index].classList.add('active');
        testimonialCards[index].style.opacity = '1';

        // Update button styles
        buttons.forEach(button => {
            button.classList.remove('active');
        });
        buttons[index].classList.add('active');
    }, 200); // Adjust the delay (in milliseconds) based on your transition duration
}
</script>