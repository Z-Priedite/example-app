<nav class="navigation-bar">

  <div class="logo">LOGO</div>

  <div class="nav-items">
    <a class="nav-item" href="/home">Home</a>
    <a class="nav-item" href="/services">Services</a>
    <a class="nav-item" href="/about">About</a>
    <a class="nav-item" href="/contact">Contact</a>
    <a class="nav-item" href="/FAQ">FAQ</a>
    <a class="signup" href="">SIGN UP</a>
  </div>
</nav>



<!--MODAL-->

<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close">X</span>
    <h3>SIGN UP</h3>
    <form method="POST" action="/home">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
      </div>

      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">
      </div>
      <input class="submit" type="submit" value="Submit">
    </form>
  </div>
</div>