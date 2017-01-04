<header class="header">
    <div class="header-block header-block-collapse hidden-lg-up"> 
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button> 
    </div>

    <div class="header-block header-block-buttons">
        <a href="https://github.com/filtration/Ransom/" class="btn btn-sm header-btn"> 
            <i class="fa fa-github-alt"></i> <span>View on GitHub</span> 
        </a>
        <a href="https://github.com/filtration/Ransom/stargazers" class="btn btn-sm header-btn"> 
            <i class="fa fa-star"></i> <span>Star Us</span> 
        </a>
    </div>
    <div class="header-block header-block-nav">
        <ul class="nav-profile">
            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="img" style="background-image: url('https://avatars2.githubusercontent.com/u/23369596?v=3&s=96')"> </div> 
                    <span class="name">
                         {{ Auth::user()->email }}
                    </span> 
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ action('AuthController@getLogout') }}"> 
                        <i class="fa fa-power-off icon"></i> 
                        {{ __("Logout") }}
                    </a>
                </div>
            </li>
        </ul>
    </div>
</header>