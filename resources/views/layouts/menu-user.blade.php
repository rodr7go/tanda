<nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
     data-position="right" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">
            <figure style="margin: 20px auto; width: 30%;">
                <a href="/">
                    <img style="width: 100%; text-align: center" src=" {{ asset('images/cochinito.png') }} " alt="">
                </a>
            </figure>

            <div class="clearfix"></div>
            <li>
                <a href=" {{ route('series.users.index') }} ">
                    <i class="fa fa-beer"></i>
                    <span class="menu-title">Tandas</span>
                </a>
            </li>
            {{--<li><a href="DataGrid.html"><i class="fa fa-database fa-fw">--}}
                        {{--<div class="icon-bg bg-red"></div>--}}
                    {{--</i><span class="menu-title">Data Grids</span></a>--}}

            {{--</li>--}}
            {{--<li><a href="Pages.html"><i class="fa fa-file-o fa-fw">--}}
                        {{--<div class="icon-bg bg-yellow"></div>--}}
                    {{--</i><span class="menu-title">Pages</span></a>--}}

            {{--</li>--}}
            {{--<li><a href="Extras.html"><i class="fa fa-gift fa-fw">--}}
                        {{--<div class="icon-bg bg-grey"></div>--}}
                    {{--</i><span class="menu-title">Extras</span></a>--}}

            {{--</li>--}}
            {{--<li><a href="Dropdown.html"><i class="fa fa-sitemap fa-fw">--}}
                        {{--<div class="icon-bg bg-dark"></div>--}}
                    {{--</i><span class="menu-title">Multi-Level Dropdown</span></a>--}}

            {{--</li>--}}
            {{--<li><a href="Email.html"><i class="fa fa-envelope-o">--}}
                        {{--<div class="icon-bg bg-primary"></div>--}}
                    {{--</i><span class="menu-title">Email</span></a>--}}

            {{--</li>--}}
            {{--<li><a href="Charts.html"><i class="fa fa-bar-chart-o fa-fw">--}}
                        {{--<div class="icon-bg bg-orange"></div>--}}
                    {{--</i><span class="menu-title">Charts</span></a>--}}

            {{--</li>--}}
            {{--<li><a href="Animation.html"><i class="fa fa-slack fa-fw">--}}
                        {{--<div class="icon-bg bg-green"></div>--}}
                    {{--</i><span class="menu-title">Animations</span></a></li>--}}
        </ul>
    </div>
</nav>