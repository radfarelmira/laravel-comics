<header>
    <div class="header-top">
        <div class="container">
            <span>dc power visa</span>
            <span>additional dc sites</span>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/dc-logo.png')}}" alt="DC logo">
            </div>

            <div class="menu">
                <ul>
                    <li>
                        <a href="{{ route('homepage')}}" class="{{ Request::route()->getName() === 'homepage' ? 'active' : ''}}">
                            home 
                        </a>
                    </li>
                    <li>
                        <a href="" class="{{ Request::route()->getName() === 'comics' ? 'active' : ''}}" >
                            comics
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            movies
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            tv
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            games
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            collectibles
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            videos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                          fans  
                        </a>  
                    </li>
                    <li>
                        <a href="{{ route('news')}}" class="{{ Request::route()->getName() === 'news' ? 'active' : ''}}">
                            news
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           shop 
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                Search
            </div>
        </div>
    </div>
</header>