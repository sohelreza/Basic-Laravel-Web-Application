<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="/">Basic Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="{{ Request::is('/') ? 'nav-item active' : 'nav-item' }}">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="{{ Request::is('about') ? 'nav-item active' : 'nav-item' }}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="{{ Request::is('contact') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="{{ Request::is('messages') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="/messages">Messages</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
