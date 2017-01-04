<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> {{ config('website.sitename') }} </div>
        </div>
        <nav class="menu">
            <ul class="nav metismenu" id="sidebar-menu">
                <li>
                    <a href="{{ action('AdminController@getKeys') }}"> <i class="fa fa-key"></i> {{ __("RSA Keys") }} </a>
                </li>

                <li>
                    <a href="{{ action('EmailController@getSpoof') }}">
                        <i class="fa fa-envelope"></i>
                        {{ __("Email Spooder") }}
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>