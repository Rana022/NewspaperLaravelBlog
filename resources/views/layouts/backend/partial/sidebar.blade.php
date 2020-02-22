 <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{asset('assets/backend/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name">Otika</span>
            </a>
          </div>
          {{-- //admin sidebar --}}
           @if(Request::is('admin*'))
                  <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

            <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}">
            <a href="{{route('admin.dashboard')}}"
             class="nav-link">
             <i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="{{Request::is('admin/post*') ? 'active' : ''}}">
            <a href="{{route('admin.post.index')}}"
             class="nav-link">
             <i data-feather="monitor"></i><span>Post</span></a>
            </li>

            <li class="{{Request::is('admin/category*') ? 'active' : ''}}">
            <a href="{{route('admin.category.index')}}"
             class="nav-link">
             <i data-feather="monitor"></i><span>Category</span></a>
            </li>

            <li class="{{Request::is('admin/tag*') ? 'active' : ''}}">
            <a href="{{route('admin.tag.index')}}"
             class="nav-link">
             <i data-feather="monitor"></i><span>Tag</span></a>
            </li>

            <li class="menu-header">Media</li>
          </ul>
           @endif
          {{-- //admin sidebar end --}}
          {{-- //author sidebar --}}
             @if(Request::is('author*'))
                  <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

            <li class="{{Request::is('author/dashboard') ? 'active' : ''}}">
            <a href="{{route('author.dashboard')}}"
             class="nav-link">
             <i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="{{Request::is('author/post') ? 'active' : ''}}">
            <a href="{{route('author.post')}}"
             class="nav-link">
             <i data-feather="monitor"></i><span>Post</span></a>
            </li>

            <li class="menu-header">Media</li>
          </ul>
           @endif
          {{-- //author sidebar end --}}

        </aside>
      </div>