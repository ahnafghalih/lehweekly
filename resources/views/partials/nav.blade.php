<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">WEB TI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home' ? 'active' : '') }}" 
          aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'berita' ? 'active' : '') }}" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'profile' ? 'active' : '') }}" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'contact' ? 'active' : '') }}" href="/kontak">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>