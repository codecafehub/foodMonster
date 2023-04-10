<div class="header-container">
    <div class="topbar">
        <div class="left-topbar">
            <i class="fas fa-mobile-alt" style="color:#cda45e; margin-right:10px;"></i><span style="color: white;  margin-right:20px;">+1 5589 55488 55</span>
            <i class="fas fa-clock" style="color:#cda45e;  margin-right:10px;"></i><span style="color: #fff">Mon-Sat: 11AM - 23PM</span> 
        </div>
        <div class="left-topbar">
            <h6 style="color: white"><span style="color:rgb(195, 175, 18)">EN</span> <span style="color:rgb(52, 48, 48)"> / </span> De</h6> 
        </div>
    </div>
    <div class="navbar">
        <div class="logo">MK <i class="fas fa-utensils"></i></div>
        <button id="toggleBtn" class="toggle-btn btn btn-outline-warning text-light"><i class="fas fa-bars"></i></button>
        <button id="toggleBtnClose" class="toggle-btn-close btn btn-outline-warning text-light"><i class="fas fa-times"></i></button>
        <div class="navlink">
            <ul>
                <li><a href="{{URL('/')}}" class="active">home</a></li> 
                <li><a href="{{URL('about')}}">About</a></li>
                <li >
                    <a href="#" id="menu">Our Menu</a>
                    <ul class="dropdown">              
                        <li><a href="#" data-toggle="modal" data-target="#ourMenu">All</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#startMenuModal">Starters</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#saladMenuModal">Salads</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#specialtyMenuModal">Spcialty</a></li>
                    </ul>
                </li>
            </ul>
            
        </div>
        <div class="account">
            <a href="#" id="account">
                <i class="fas fa-user"  style="cursor: pointer; color:#cda45e">  </i>
            </a>
            <ul class="reg">              
                <li><a href="" data-toggle="modal" data-target="#loginModal">Log In</a></li>
                <li><a href="" data-toggle="modal" data-target="#formRegistrModal">register</a></li>
            </ul>
        </div>
    </div>
    <nav class="navbar-item" id="nav">
        <ul class="list-group">
            <li><a href="{{URL('/')}}" class="active">home</a></li> 
            <li><a href="{{URL('about')}}">About</a></li>
            <li >
                <a href="#" id="menu" class="dropdown-toggle">Our Menu</a>
                <ul class="dropdown">              
                    <li><a href="">drop</a></li>
                    <li><a href="">drop</a></li>
                    <li><a href="">drop</a></li>
                </ul>
            </li>
            
        </ul>
     </nav> 
</div>
