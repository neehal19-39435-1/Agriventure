<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand mt-2 mt-lg-0" href="{{route('dashboard')}}">
        <img
          src="http://kawieagriventure.com/wp-content/uploads/2021/10/kawie-agri-logo-white.png"
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-end  " id="navbarNavDropdown" style="margin-right:100px;">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img  src="https://thumbs.dreamstime.com/b/default-avatar-profile-image-vector-social-media-user-icon-potrait-182347582.jpg" alt="profile pic"  width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profile</a>
          <a class="dropdown-item" href="{{route('farmerLogout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>