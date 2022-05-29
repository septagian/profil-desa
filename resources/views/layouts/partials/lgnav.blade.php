<nav class="navbar navbar-expand-lg navbar-light bg-transparent  lg-navbar mt-4 fw-bold">
    <div class="container">
      <a class="navbar-brand text-light" href="#"><img src="img/Logo-desa.png" alt="" width="400" height="87">DESA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  text-success " href="#">PROFIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-success " href="#">LEMBAGA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-success " href="#">INFORMASI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-success " href="#">DIKTORI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-success " href="#">BUKU TAMU</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
             <button  type="submit" class="btn btn-primary">logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>