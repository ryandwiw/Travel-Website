<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Title Here</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- FontAwesome for icons -->
<style>
  @import url("https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap");
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .navbar {
    background-color: transparent !important; /* Make navbar transparent */
  }

  .navbar-nav .nav-link {
    margin-right: 20px; /* Add spacing between navbar links */
  }

  .social-icons {
    display: flex;
    justify-content: center;
    gap: 20px; /* Add spacing between social icons */
  }

  .social-icons a {
    color: white;
    font-size: 24px;
    transition: color 0.3s ease;
  }

  .social-icons a:hover {
    color: #7645d8; /* Change color on hover */
  }

  
  .bodyweight {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    background: #100721;
    font-family: "Ubuntu Mono", monospace;
    font-weight: 400;
    padding: 20px; /* Added padding for better spacing */
  

 
  .container {
    width: 100%;
    display: flex;
    justify-content: flex-end; /* Align container to the right */
    height: 500px;
    gap: 10px;
  }
  
  .container > div {
    flex: 0 0 120px;
    border-radius: 0.5rem;
    transition: 0.5s ease-in-out;
    cursor: pointer;
    box-shadow: 1px 5px 15px #1e0e3e;
    position: relative;
    overflow: hidden;
  }
  
  .container > div:nth-of-type(1) {
    background: url("https://images.pexels.com/photos/1845208/pexels-photo-1845208.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260")
      no-repeat 50% / cover;
  }
  
  .container > div:nth-of-type(2) {
    background: url("https://images.pexels.com/photos/36469/woman-person-flowers-wreaths.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260")
      no-repeat 50% / cover;
  }
  
  .container > div:nth-of-type(3) {
    background: url("https://images.pexels.com/photos/1468379/pexels-photo-1468379.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260")
      no-repeat 50% / cover;
  }
  
  .container > div:nth-of-type(4) {
    background: url("https://images.pexels.com/photos/247322/pexels-photo-247322.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260")
      no-repeat 50% / cover;
  }
  
  .content {
    font-size: 1.5rem;
    color: #fff;
    display: flex;
    align-items: center;
    padding: 15px;
    opacity: 0;
    flex-direction: column;
    height: 100%;
    justify-content: flex-end;
    background: rgb(2, 2, 46);
    background: linear-gradient(
      0deg,
      rgba(2, 2, 46, 0.6755077030812324) 0%,
      rgba(255, 255, 255, 0) 100%
    );
    transform: translateY(100%);
    transition: opacity 0.5s ease-in-out, transform 0.5s 0.2s;
    visibility: hidden;
  }
  
  .content span {
    display: block;
    margin-top: 5px;
    font-size: 1.2rem;
  }
  
  .container > div:hover {
    flex: 0 0 250px;
    box-shadow: 1px 3px 15px #7645d8;
    transform: translateY(-30px);
  }
  
  .container > div:hover .content {
    opacity: 1;
    transform: translateY(0%);
    visibility: visible;
  }

}
</style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: transparent !important; border: none;">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tours</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </nav>
      
      

<div class="bodyweight">
  <div class="container">
    <div>
      <div class="content">
        <h2>Jane Doe</h2>
        <span>UI & UX Designer</span>
      </div>
    </div>
    <div>
      <div class="content">
        <h2>Alex Smith</h2>
        <span>CEO Expert</span>
      </div>
    </div>
    <div>
      <div class="content">
        <h2>Emily New</h2>
        <span>Web Designer</span>
      </div>
    </div>
    <div>
      <div class="content">
        <h2>Lisa Boley</h2>
        <span>Marketing Coordinator</span>
      </div>
    </div>
  </div>

  <div class="social-icons">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
