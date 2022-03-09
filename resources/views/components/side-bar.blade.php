<div class="app-menu">
    <ul class="accordion-menu">
        <li class="sidebar-title">
           NAVIGATION
        </li>
        {{-- <li class="active-page">
            <a href="/" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
        </li> --}}

        @switch(Auth::user()->user_role)
    
    @case('admin')
            
            <li class="{{ request()->is('admin')? 'active-page' : ''}}">
                <a href="{{url('dashboard')}}"> 
                    <i class="material-icons-two-tone">dashboard</i>
                    Overview
                </a>
            </li>
            
            <li class="{{ request()->is('manage')? 'active-page' : ''}}">
                <a href="{{url('manage')}}"> 
                    <i class="material-icons-two-tone"> dashboard_customize </i>
                    Admin Area
                </a>
            </li>

            <li class="{{ request()->is('new-release')? 'active-page' : ''}}">
                <a href="/new-release">
                    <i class="material-icons-two-tone"> library_music </i>
                    Releases
                </a>
            </li>

            <li class="{{ request()->is('upload-songs')? 'active-page' : ''}}">
                <a href="/upload-songs">
                    <i class="material-icons-two-tone"> library_add </i>
                    Uploads</a>
            </li>
            <li class="{{ request()->is('royalties')? 'active-page' : ''}}">
                <a href="/royalties">
                    <i class="material-icons-two-tone"> paid </i>
                    Royalties</a>
            </li>
            <li class="{{ request()->is('users')? 'active-page' : ''}}"> 
                <a href="/users">
                    <i class="material-icons-two-tone"> people </i>
                    Users</a>
            </li>
            <x-logout-link />
    
        @break

    @case('user')
    
    
        <li class="{{ request()->is('user')? 'active' : ''}}">
            <a href="/dashboard"> <i class="material-icons-two-tone"> dashboard </i>Overview</a>
        </li>
        <li class="{{ request()->is('royalties')? 'active' : ''}}"><a href="/royalties">
            <i class="material-icons-two-tone"> paid </i>Royalties</a></li>
        
            <x-logout-link />

        @break

    @default
      
            <li class="{{ request()->is('dashboard')? 'active' : ''}}"><a href="/dashboard">MUSIC</a></li>
        
@endswitch


        {{-- <li>
            <a href="mailbox.html"><i class="material-icons-two-tone">inbox</i>Mailbox<span class="badge rounded-pill badge-danger float-end">87</span></a>
        </li> --}}
        {{-- <li>
            <a href="file-manager.html"><i class="material-icons-two-tone">cloud_queue</i>File Manager</a>
        </li>
        <li>
            <a href="calendar.html"><i class="material-icons-two-tone">calendar_today</i>Calendar<span class="badge rounded-pill badge-success float-end">14</span></a>
        </li>
        <li>
            <a href="todo.html"><i class="material-icons-two-tone">done</i>Todo</a>
        </li>
        <li>
            <a href=""><i class="material-icons-two-tone">star</i>Pages<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="pricing.html">Pricing</a>
                </li>
                <li>
                    <a href="invoice.html">Invoice</a>
                </li>
                <li>
                    <a href="settings.html">Settings</a>
                </li>
                <li>
                    <a href="#">Authentication<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="sign-in.html">Sign In</a>
                        </li>
                        <li>
                            <a href="sign-up.html">Sign Up</a>
                        </li>
                        <li>
                            <a href="lock-screen.html">Lock Screen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="error.html">Error</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-title">
            UI Elements
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">color_lens</i>Styles<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="styles-typography.html">Typography</a>
                </li>
                <li>
                    <a href="styles-code.html">Code</a>
                </li>
                <li>
                    <a href="styles-icons.html">Icons</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">grid_on</i>Tables<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="tables-basic.html">Basic</a>
                </li>
                <li>
                    <a href="tables-datatable.html">DataTable</a>
                </li>
            </ul>
        </li>
        <li>
            <a href=""><i class="material-icons-two-tone">sentiment_satisfied_alt</i>Elements<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="ui-alerts.html">Alerts</a>
                </li>
                <li>
                    <a href="ui-avatars.html">Avatars</a>
                </li>
                <li>
                    <a href="ui-badge.html">Badge</a>
                </li>
                <li>
                    <a href="ui-breadcrumbs.html">Breadcrumbs</a>
                </li>
                <li>
                    <a href="ui-buttons.html">Buttons</a>
                </li>
                <li>
                    <a href="ui-button-groups.html">Button Groups</a>
                </li>
                <li>
                    <a href="ui-collapse.html">Collapse</a>
                </li>
                <li>
                    <a href="ui-dropdown.html">Dropdown</a>
                </li>
                <li>
                    <a href="ui-images.html">Images</a>
                </li>
                <li>
                    <a href="ui-pagination.html">Pagination</a>
                </li>
                <li>
                    <a href="ui-popovers.html">Popovers</a>
                </li>
                <li>
                    <a href="ui-progress.html">Progress</a>
                </li>
                <li>
                    <a href="ui-spinners.html">Spinners</a>
                </li>
                <li>
                    <a href="ui-toast.html">Toast</a>
                </li>
                <li>
                    <a href="ui-tooltips.html">Tooltips</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">card_giftcard</i>Components<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="components-accordions.html">Accordions</a>
                </li>
                <li>
                    <a href="components-block-ui.html">Block UI</a>
                </li>
                <li>
                    <a href="components-cards.html">Cards</a>
                </li>
                <li>
                    <a href="components-carousel.html">Carousel</a>
                </li>
                <li>
                    <a href="components-countdown.html">Countdown</a>
                </li>
                <li>
                    <a href="components-lightbox.html">Lightbox</a>
                </li>
                <li>
                    <a href="components-lists.html">Lists</a>
                </li>
                <li>
                    <a href="components-modals.html">Modals</a>
                </li>
                <li>
                    <a href="components-tabs.html">Tabs</a>
                </li>
                <li>
                    <a href="components-session-timeout.html">Session Timeout</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="widgets.html"><i class="material-icons-two-tone">widgets</i>Widgets</a>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">edit</i>Forms<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="forms-basic.html">Basic</a>
                </li>
                <li>
                    <a href="forms-input-groups.html">Input Groups</a>
                </li>
                <li>
                    <a href="forms-input-masks.html">Input Masks</a>
                </li>
                <li>
                    <a href="forms-layouts.html">Form Layouts</a>
                </li>
                <li>
                    <a href="forms-validation.html">Form Validation</a>
                </li>
                <li>
                    <a href="forms-file-upload.html">File Upload</a>
                </li>
                <li>
                    <a href="forms-text-editor.html">Text Editor</a>
                </li>
                <li>
                    <a href="forms-datepickers.html">Datepickers</a>
                </li>
                <li>
                    <a href="forms-select2.html">Select2</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">analytics</i>Charts<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="charts-apex.html">Apex</a>
                </li>
                <li>
                    <a href="charts-chartjs.html">ChartJS</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-title">
            Layout
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">view_agenda</i>Content<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="content-page-headings.html">Page Headings</a>
                </li>
                <li>
                    <a href="content-section-headings.html">Section Headings</a>
                </li>
                <li>
                    <a href="content-left-menu.html">Left Menu</a>
                </li>
                <li>
                    <a href="content-right-menu.html">Right Menu</a>
                </li>
                <li>
                    <a href="content-boxed-content.html">Boxed Content</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">menu</i>Menu<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="menu-off-canvas.html">Off-Canvas</a>
                </li>
                <li>
                    <a href="menu-standard.html">Standard</a>
                </li>
                <li>
                    <a href="menu-dark-sidebar.html">Dark Sidebar</a>
                </li>
                <li>
                    <a href="menu-hover-menu.html">Hover Menu</a>
                </li>
                <li>
                    <a href="menu-colored-sidebar.html">Colored Sidebar</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">view_day</i>Header<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
            <ul class="sub-menu">
                <li>
                    <a href="header-basic.html">Basic</a>
                </li>
                <li>
                    <a href="header-full-width.html">Full-width</a>
                </li>
                <li>
                    <a href="header-transparent.html">Transparent</a>
                </li>
                <li>
                    <a href="header-large.html">Large</a>
                </li>
                <li>
                    <a href="header-colorful.html">Colorful</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-title">
            Other
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">bookmark</i>Documentation</a>
        </li>
        <li>
            <a href="#"><i class="material-icons-two-tone">access_time</i>Change Log</a>
        </li> --}}
    </ul>
</div>