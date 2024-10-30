
@php
   $segment = request()->segment(1);
@endphp
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-thumbnail" src="https://th.bing.com/th?id=OIF.BQKmgTkUaTKwQ%2fzLHfkzVg&w=206&h=183&c=7&r=0&o=5&dpr=2&pid=1.7" />
                         </span>
                </div>
                <div class="logo-element">
                    <i class="fa fa-desktop"></i>
                </div>
            </li>
            @foreach(__('sidebar.module') as $key => $val)
            <li class=" {{ (isset($val['class'])) ? $val['class'] : '' }} {{ (in_array($segment, $val['name'])) ? 'active' : '' }}">
                <a href="{{ (isset($val['route'])) ? $val['route'] : '' }}">
                    <i class="{{ $val['icon'] }}"></i> 
                    <span class="nav-label">{{ $val['title'] }}</span> 
                    @if(isset($val['subModule']) && count($val['subModule']))
                    <span class="fa arrow"></span>
                    @endif
                </a>
                @if(isset($val['subModule']))
                <ul class="nav nav-second-level">
                    @foreach($val['subModule'] as $module)
                    <li><a href="{{ $module['route'] }}">{{ $module['title'] }}</a></li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</nav>