<?php error_reporting(0); ?>
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="submenu {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><i class="feather-grid"></i> <span> Dashboard</span> </a>
                </li>
                @can('view-permissions', 'view-roles')
                    <li
                        class="submenu {{ Request::routeIs('permissions.*') ? 'active' : '' }} {{ Request::routeIs('rps.*') ? 'active' : '' }}">
                        <a href=""><i class="fas fa-users"></i> <span>Roles Management</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li>
                                <a href="{{ route('permissions.index') }}"
                                    class="{{ Request::routeIs('permissions.*') ? 'active' : '' }}">Permissions List</a>
                            </li>
                            <li>
                                <a href="{{ route('rps.index') }}"
                                    class="{{ Request::routeIs('rps.*') ? 'active' : '' }}">Role
                                    Permissions
                                    List</a>
                            </li>
                            <li>
                                <a href="{{ route('settings') }}"
                                    class="{{ Request::routeIs('settings') ? 'active' : '' }}">Settings
                                    List</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                <li class="submenu <?php if ($page == 'students' || $page == 'students-grid' || $page == 'student-details' || $page == 'add-student' || $page == 'edit-student') {
                    echo 'active';
                } ?>">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if ($page == 'students' || $page == 'students-grid') {
                            echo 'active';
                        } ?>" href="{{ url('students') }}">Student List</a></li>
                        <li><a class="<?php if ($page == 'student-details') {
                            echo 'active';
                        } ?>" href="{{ url('student-details') }}">Student View</a></li>
                        <li><a class="<?php if ($page == 'add-student') {
                            echo 'active';
                        } ?>" href="{{ url('add-student') }}">Student Add</a></li>
                        <li><a class="<?php if ($page == 'edit-student') {
                            echo 'active';
                        } ?>" href="{{ url('edit-student') }}">Student Edit</a></li>
                    </ul>
                </li>
                <li class="submenu <?php if ($page == 'teachers' || $page == 'teachers-grid' || $page == 'teacher-details' || $page == 'add-teacher' || $page == 'edit-teacher') {
                    echo 'active';
                } ?>">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if ($page == 'teachers' || $page == 'teachers-grid') {
                            echo 'active';
                        } ?>" href="{{ url('teachers') }}">Teacher List</a></li>
                        <li><a class="<?php if ($page == 'teacher-details') {
                            echo 'active';
                        } ?>" href="{{ url('teacher-details') }}">Teacher View</a></li>
                        <li><a class="<?php if ($page == 'add-teacher') {
                            echo 'active';
                        } ?>" href="{{ url('add-teacher') }}">Teacher Add</a></li>
                        <li><a class="<?php if ($page == 'edit-teacher') {
                            echo 'active';
                        } ?>" href="{{ url('edit-teacher') }}">Teacher Edit</a></li>
                    </ul>
                </li>
                <li class="submenu <?php if ($page == 'departments' || $page == 'add-department' || $page == 'edit-department') {
                    echo 'active';
                } ?>">
                    <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if ($page == 'departments') {
                            echo 'active';
                        } ?>" href="{{ url('departments') }}">Department List</a></li>
                        <li><a class="<?php if ($page == 'add-department') {
                            echo 'active';
                        } ?>" href="{{ url('add-department') }}">Department Add</a></li>
                        <li><a class="<?php if ($page == 'edit-department') {
                            echo 'active';
                        } ?>" href="{{ url('edit-department') }}">Department Edit</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu <?php if ($page == 'subjects' || $page == 'add-subject' || $page == 'edit-subject') {
                    echo 'active';
                } ?>">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if ($page == 'subjects') {
                            echo 'active';
                        } ?>" href="{{ url('subjects') }}">Subject List</a></li>
                        <li><a class="<?php if ($page == 'add-subject') {
                            echo 'active';
                        } ?>" href="{{ url('add-subject') }}">Subject Add</a></li>
                        <li><a class="<?php if ($page == 'edit-subject') {
                            echo 'active';
                        } ?>" href="{{ url('edit-subject') }}">Subject Edit</a></li>
                    </ul>
                </li>
                <li
                    class="submenu {{ Request::is('invoices', 'invoices-paid', 'bank-settings', 'tax-settings', 'invoices-overdue', 'invoices-draft', 'invoices-recurring', 'invoices-cancelled', 'invoice-grid', 'add-invoice', 'edit-invoice', 'view-invoice', 'invoices-settings') ? 'active' : '' }}">
                    <a class=" {{ Request::is('invoices') ? 'active' : '' }}" href="{{ url('invoices') }}"><i
                            class="fas fa-clipboard"></i> <span> Invoices</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a class=" {{ Request::is('invoices', 'invoices-paid', 'invoices-overdue', 'invoices-draft', 'invoices-recurring', 'invoices-cancelled') ? 'active' : '' }}"
                                href="{{ url('invoices') }}">Invoices List</a></li>
                        <li><a class=" {{ Request::is('invoice-grid') ? 'active' : '' }}"
                                href="{{ url('invoice-grid') }}">Invoices Grid</a></li>
                        <li><a class=" {{ Request::is('add-invoice') ? 'active' : '' }}"
                                href="{{ url('add-invoice') }}">Add Invoices</a></li>
                        <li><a class=" {{ Request::is('edit-invoice') ? 'active' : '' }}"
                                href="{{ url('edit-invoice') }}">Edit Invoices</a></li>
                        <li><a class=" {{ Request::is('view-invoice') ? 'active' : '' }}"
                                href="{{ url('view-invoice') }}">Invoices Details</a></li>
                        <li><a class=" {{ Request::is('invoices-settings', 'tax-settings', 'bank-settings') ? 'active' : '' }}"
                                href="{{ url('invoices-settings') }}">Invoices Settings</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Management</span>
                </li>

                <li class="submenu <?php if ($page == 'fees-collections' || $page == 'expenses' || $page == 'salary' || $page == 'add-fees-collection' || $page == 'add-expenses' || $page == 'add-salary') {
                    echo 'active';
                } ?>">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if ($page == 'fees-collections') {
                            echo 'active';
                        } ?>" href="{{ url('fees-collections') }}">Fees Collection</a>
                        </li>
                        <li><a class="<?php if ($page == 'expenses') {
                            echo 'active';
                        } ?>" href="{{ url('expenses') }}">Expenses</a></li>
                        <li><a class="<?php if ($page == 'salary') {
                            echo 'active';
                        } ?>" href="{{ url('salary') }}">Salary</a></li>
                        <li><a class="<?php if ($page == 'add-fees-collection') {
                            echo 'active';
                        } ?>" href="{{ url('add-fees-collection') }}">Add Fees</a></li>
                        <li><a class="<?php if ($page == 'add-expenses') {
                            echo 'active';
                        } ?>" href="{{ url('add-expenses') }}">Add Expenses</a></li>
                        <li><a class="<?php if ($page == 'add-salary') {
                            echo 'active';
                        } ?>" href="{{ url('add-salary') }}">Add Salary</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('holiday', 'add-holiday') ? 'active' : '' }}">
                    <a href="{{ url('holiday') }}"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                </li>
                <li class="{{ Request::is('fees', 'add-fees', 'edit-fees') ? 'active' : '' }}">
                    <a href="{{ url('fees') }}"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                </li>
                <li class="{{ Request::is('exam', 'add-exam', 'edit-exam') ? 'active' : '' }}">
                    <a href="{{ url('exam') }}"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                </li>
                <li class="{{ Request::is('event', 'add-events', 'edit-events') ? 'active' : '' }}">
                    <a href="{{ url('event') }}"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                </li>
                <li class="{{ Request::is('time-table', 'add-time-table', 'edit-time-table') ? 'active' : '' }}">
                    <a href="{{ url('time-table') }}"><i class="fas fa-table"></i> <span>Time Table</span></a>
                </li>
                <li class="{{ Request::is('library', 'add-books', 'edit-books') ? 'active' : '' }}">
                    <a href="{{ url('library') }}"><i class="fas fa-book"></i> <span>Library</span></a>
                </li>
                <li class="submenu" <?php if ($page == 'blog' || $page == 'pending-blog' || $page == 'add-blog' || $page == 'edit-blog' || $page == 'blog-categories') {
                    echo 'active';
                } ?>">
                    <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a class="<?php if ($page == 'blog' || $page == 'pending-blog' || $page == 'blog-details') {
                            echo 'active';
                        } ?>" href="{{ url('blog') }}">All Blogs</a></li>
                        <li><a class="<?php if ($page == 'add-blog') {
                            echo 'active';
                        } ?>" href="{{ url('add-blog') }}">Add Blog</a></li>
                        <li><a class="<?php if ($page == 'edit-blog') {
                            echo 'active';
                        } ?>" href="{{ url('edit-blog') }}">Edit Blog</a></li>
                        <li><a class="<?php if ($page == 'blog-categories') {
                            echo 'active';
                        } ?>" href="{{ url('blog-categories') }}">Categories</a></li>
                    </ul>
                </li>
                <li
                    class="{{ Request::is('settings', 'localization', 'payment-settings', 'emailsettings', 'social-settings', 'social-links', 'seo-settings', 'others-settings') ? 'active' : '' }}">
                    <a href="{{ url('settings') }}"><i class="fas fa-cog"></i> <span> Settings</span>
                    </a>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>

                <li class="submenu <?php if ($page == 'login' || $page == 'register' || $page == 'forgot-password' || $page == 'error-404') {
                    echo 'active';
                } ?>">
                    <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if ($page == 'login') {
                            echo 'active';
                        } ?>" href="{{ url('login') }}">Login</a></li>
                        <li><a class="<?php if ($page == 'register') {
                            echo 'active';
                        } ?>" href="{{ url('register') }}">Register</a></li>
                        <li><a class="<?php if ($page == 'forgot-password') {
                            echo 'active';
                        } ?>" href="{{ url('forgot-password') }}">Forgot Password</a>
                        </li>
                        <li><a class="<?php if ($page == 'error-404') {
                            echo 'active';
                        } ?>" href="{{ url('error-404') }}">Error Page</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                    <a href="{{ url('blank-page') }}"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                </li>

                <li class="menu-title">
                    <span>Others</span>
                </li>

                <li class="{{ Request::is('sports', 'add-sports', 'edit-sports') ? 'active' : '' }}">
                    <a href="{{ url('sports') }}"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                </li>
                <li class="{{ Request::is('hostel', 'add-room', 'edit-room') ? 'active' : '' }}">
                    <a href="{{ url('hostel') }}"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                </li>
                <li class="{{ Request::is('transport', 'add-transport', 'edit-transport') ? 'active' : '' }}">
                    <a href="{{ url('transport') }}"><i class="fas fa-bus"></i> <span>Transport</span></a>
                </li>
                <li class="menu-title">
                    <span>UI Interface</span>
                </li>
                <li
                    class="{{ Request::is(
                        'alerts',
                        'accordions',
                        'avatar',
                        'badges',
                        'buttons',
                        'buttongroup',
                        'breadcrumbs',
                        'cards',
                        'carousel',
                        'dropdowns',
                        'grid',
                        'images',
                        'lightbox',
                        'media',
                        'modal',
                        'offcanvas',
                        'pagination',
                        'popover',
                        'progress',
                        'placeholders',
                        'rangeslider',
                        'spinner',
                        'spinners',
                        'sweetalerts',
                        'tab',
                        'toastr',
                        'tooltip',
                        'typography',
                        'video',
                    )
                        ? 'active'
                        : '' }} submenu">
                    <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('alerts') ? 'active' : '' }}"
                                href="{{ url('alerts') }}">Alerts</a></li>
                        <li><a class="{{ Request::is('accordions') ? 'active' : '' }}"
                                href="{{ url('accordions') }}">Accordions</a></li>
                        <li><a class="{{ Request::is('avatar') ? 'active' : '' }}" href="{{ url('avatar') }}"
                                class="active">Avatar</a></li>
                        <li><a class="{{ Request::is('badges') ? 'active' : '' }}"
                                href="{{ url('badges') }}">Badges</a></li>
                        <li><a class="{{ Request::is('buttons') ? 'active' : '' }}"
                                href="{{ url('buttons') }}">Buttons</a></li>
                        <li><a class="{{ Request::is('buttongroup') ? 'active' : '' }}"
                                href="{{ url('buttongroup') }}">Button Group</a></li>
                        <li><a class="{{ Request::is('breadcrumbs') ? 'active' : '' }}"
                                href="{{ url('breadcrumbs') }}">Breadcrumb</a></li>
                        <li><a class="{{ Request::is('cards') ? 'active' : '' }}"
                                href="{{ url('cards') }}">Cards</a></li>
                        <li><a class="{{ Request::is('carousel') ? 'active' : '' }}"
                                href="{{ url('carousel') }}">Carousel</a></li>
                        <li><a class="{{ Request::is('dropdowns') ? 'active' : '' }}"
                                href="{{ url('dropdowns') }}">Dropdowns</a></li>
                        <li><a class="{{ Request::is('grid') ? 'active' : '' }}" href="{{ url('grid') }}">Grid</a>
                        </li>
                        <li><a class="{{ Request::is('images') ? 'active' : '' }}"
                                href="{{ url('images') }}">Images</a></li>
                        <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}"
                                href="{{ url('lightbox') }}">Lightbox</a></li>
                        <li><a class="{{ Request::is('media') ? 'active' : '' }}"
                                href="{{ url('media') }}">Media</a></li>
                        <li><a class="{{ Request::is('modal') ? 'active' : '' }}"
                                href="{{ url('modal') }}">Modals</a></li>
                        <li><a class="{{ Request::is('offcanvas') ? 'active' : '' }}"
                                href="{{ url('offcanvas') }}">Offcanvas</a></li>
                        <li><a class="{{ Request::is('pagination') ? 'active' : '' }}"
                                href="{{ url('pagination') }}">Pagination</a></li>
                        <li><a class="{{ Request::is('popover') ? 'active' : '' }}"
                                href="{{ url('popover') }}">Popover</a></li>
                        <li><a class="{{ Request::is('progress') ? 'active' : '' }}"
                                href="{{ url('progress') }}">Progress Bars</a></li>
                        <li><a class="{{ Request::is('placeholders') ? 'active' : '' }}"
                                href="{{ url('placeholders') }}">Placeholders</a></li>
                        <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}"
                                href="{{ url('rangeslider') }}">Range Slider</a></li>
                        <li><a class="{{ Request::is('spinner', 'spinners') ? 'active' : '' }}"
                                href="{{ url('spinners') }}">Spinner</a></li>
                        <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}"
                                href="{{ url('sweetalerts') }}">Sweet Alerts</a></li>
                        <li><a class="{{ Request::is('tab') ? 'active' : '' }}"
                                href="{{ url('tab') }}">Tabs</a></li>
                        <li><a class="{{ Request::is('toastr') ? 'active' : '' }}"
                                href="{{ url('toastr') }}">Toasts</a></li>
                        <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}"
                                href="{{ url('tooltip') }}">Tooltip</a></li>
                        <li><a class="{{ Request::is('typography') ? 'active' : '' }}"
                                href="{{ url('typography') }}">Typography</a></li>
                        <li><a class="{{ Request::is('video') ? 'active' : '' }}"
                                href="{{ url('video') }}">Video</a></li>
                    </ul>
                </li>
                <li
                    class="{{ Request::is(
                        'ribbon',
                        'clipboard',
                        'drag-drop',
                        'rating',
                        'text-editor',
                        'counter',
                        'scrollbar',
                        'notification',
                        'stickynote',
                        'timeline',
                        'horizontal-timeline',
                        'form-wizard',
                    )
                        ? 'active'
                        : '' }} submenu">
                    <a href="#"><i data-feather="box"></i> <span>Elements </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}" href="ribbon">Ribbon</a></li>
                        <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}" href="clipboard">Clipboard</a>
                        </li>
                        <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}" href="drag-drop">Drag &
                                Drop</a></li>
                        <li><a class="{{ Request::is('rating') ? 'active' : '' }}" href="rating">Rating</a></li>
                        <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}" href="text-editor">Text
                                Editor</a></li>
                        <li><a class="{{ Request::is('counter') ? 'active' : '' }}" href="counter">Counter</a></li>
                        <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}" href="scrollbar">Scrollbar</a>
                        </li>
                        <li><a class="{{ Request::is('notification') ? 'active' : '' }}"
                                href="notification">Notification</a></li>
                        <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}" href="stickynote">Sticky
                                Note</a></li>
                        <li><a class="{{ Request::is('timeline') ? 'active' : '' }}" href="timeline">Timeline</a>
                        </li>
                        <li><a class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}"
                                href="horizontal-timeline">Horizontal Timeline</a></li>
                        <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="form-wizard">Form
                                Wizard</a></li>
                    </ul>
                </li>
                <li
                    class="{{ Request::is('chart-apex', 'chart-js', 'chart-morris', 'chart-flot', 'chart-peity', 'chart-c3') ? 'active' : '' }} submenu">
                    <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('chart-apex') ? 'active' : '' }}" href="chart-apex">Apex
                                Charts</a></li>
                        <li><a class="{{ Request::is('chart-js') ? 'active' : '' }}" href="chart-js">Chart Js</a>
                        </li>
                        <li><a class="{{ Request::is('chart-morris') ? 'active' : '' }}" href="chart-morris">Morris
                                Charts</a></li>
                        <li><a class="{{ Request::is('chart-flot') ? 'active' : '' }}" href="chart-flot">Flot
                                Charts</a></li>
                        <li><a class="{{ Request::is('chart-peity') ? 'active' : '' }}" href="chart-peity">Peity
                                Charts</a></li>
                        <li><a class="{{ Request::is('chart-c3') ? 'active' : '' }}" href="chart-c3">C3 Charts</a>
                        </li>
                    </ul>
                </li>
                <li
                    class="{{ Request::is(
                        'icon-fontawesome',
                        'icon-feather',
                        'icon-ionic',
                        'icon-material',
                        'icon-pe7',
                        'icon-simpleline',
                        'icon-themify',
                        'icon-weather',
                        'icon-typicon',
                        'icon-flag',
                    )
                        ? 'active'
                        : '' }} submenu">
                    <a href="#"><i data-feather="award"></i> <span> Icons </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}"
                                href="icon-fontawesome">Fontawesome Icons</a></li>
                        <li><a class="{{ Request::is('icon-feather') ? 'active' : '' }}" href="icon-feather">Feather
                                Icons</a></li>
                        <li><a class="{{ Request::is('icon-ionic') ? 'active' : '' }}" href="icon-ionic">Ionic
                                Icons</a></li>
                        <li><a class="{{ Request::is('icon-material') ? 'active' : '' }}"
                                href="icon-material">Material Icons</a></li>
                        <li><a class="{{ Request::is('icon-pe7') ? 'active' : '' }}" href="icon-pe7">Pe7 Icons</a>
                        </li>
                        <li><a class="{{ Request::is('icon-simpleline') ? 'active' : '' }}"
                                href="icon-simpleline">Simpleline Icons</a></li>
                        <li><a class="{{ Request::is('icon-themify') ? 'active' : '' }}" href="icon-themify">Themify
                                Icons</a></li>
                        <li><a class="{{ Request::is('icon-weather') ? 'active' : '' }}" href="icon-weather">Weather
                                Icons</a></li>
                        <li><a class="{{ Request::is('icon-typicon') ? 'active' : '' }}" href="icon-typicon">Typicon
                                Icons</a></li>
                        <li><a class="{{ Request::is('icon-flag') ? 'active' : '' }}" href="icon-flag">Flag
                                Icons</a></li>
                    </ul>
                </li>
                <li class="submenu <?php if ($page == 'form-basic-inputs' || $page == 'form-input-groups' || $page == 'form-horizontal' || $page == 'form-vertical' || $page == 'form-mask' || $page == 'form-validation') {
                    echo 'active';
                } ?>">
                    <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if ($page == 'form-basic-inputs') {
                            echo 'active';
                        } ?>" href="{{ url('form-basic-inputs') }}">Basic Inputs </a>
                        </li>
                        <li><a class="<?php if ($page == 'form-input-groups') {
                            echo 'active';
                        } ?>" href="{{ url('form-input-groups') }}">Input Groups </a>
                        </li>
                        <li><a class="<?php if ($page == 'form-horizontal') {
                            echo 'active';
                        } ?>" href="{{ url('form-horizontal') }}">Horizontal Form </a>
                        </li>
                        <li><a class="<?php if ($page == 'form-vertical') {
                            echo 'active';
                        } ?>" href="{{ url('form-vertical') }}"> Vertical Form </a>
                        </li>
                        <li><a class="<?php if ($page == 'form-mask') {
                            echo 'active';
                        } ?>" href="{{ url('form-mask') }}"> Form Mask </a></li>
                        <li><a class="<?php if ($page == 'form-validation') {
                            echo 'active';
                        } ?>" href="{{ url('form-validation') }}"> Form Validation
                            </a></li>
                    </ul>
                </li>
                <li class="submenu <?php if ($page == 'tables-basic' || $page == 'data-tables') {
                    echo 'active';
                } ?>">
                    <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="<?php if ($page == 'tables-basic') {
                            echo 'active';
                        } ?>" href="{{ url('tables-basic') }}">Basic Tables </a></li>
                        <li><a class="<?php if ($page == 'data-tables') {
                            echo 'active';
                        } ?>" href="{{ url('data-tables') }}">Data Table </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <span>Level 1</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
