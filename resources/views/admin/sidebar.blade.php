<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search..." />
                    <input type="button" class="submit" value=" " />
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        @foreach (Config::get('admin.menu') as $name => $arr)
            @if (in_array($arr['id'], $menus))
            <li class="@if ($name == $nav['pageName'])active @endif">
                <a href="{{ $arr['href'] }}">
                    <i class="{{ $arr['icon'] }}"></i>
                    <span class="title">{{ $name }}</span>
                    @if ($name == $nav['pageName'])
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    @else
                        <span class="arrow"></span>
                    @endif
                </a>
                @if (count($arr['subMenu']) != 0)
                    <ul class="sub-menu">
                        @foreach ($arr['subMenu'] as $subarr)
                        <li @if ($subarr['name'] == $nav['subPage']) class="active" @endif>
                            <a href="{{ $subarr['href'] }}">
                                {{ $subarr['name'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            @endif
        @endforeach
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->