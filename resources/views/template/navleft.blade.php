
<div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a href="javascript:void(0)" class="header-brand icon menu_toggle"><i class="fa  fa-bars brand-logo"></i></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right" title="Usuario#1"/></a>
                    <a href="{{ url('clients') }}"  class="nav-link icon xs-hide"><i class="fa fa-users" data-toggle="tooltip" data-placement="right" title="Clients"></i></a>
                    <a href="{{ url('files') }}"  class="nav-link icon app_inbox xs-hide"><i class="fa fa-clipboard" data-toggle="tooltip" data-placement="right" title="Files"></i></a>
                    <a href="app-chat.html"  class="nav-link icon xs-hide"><i class="fa fa-car" data-toggle="tooltip" data-placement="right" title="Cars"></i></a>
                    <a href="app-chat.html"  class="nav-link icon xs-hide"><i class="fa fa-shipping-fast" data-toggle="tooltip" data-placement="right" title="Tracing"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon theme_btn xs-hide"><i class="fa fa-shopping-cart" data-toggle="tooltip" data-placement="right" title="Shopping Cart"></i></a>
                </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gear fa-spin" data-toggle="tooltip" data-placement="right" title="Settings"></i></a>
                </div>            
            </div>
        </div>
    </div>

     <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <div class="p-4">
            <div>
                <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                <ul class="setting-list list-unstyled mt-1 setting_switch">
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Night Mode</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Fix Navbar top</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Header Dark</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader" checked="">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Min Sidebar Dark</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Sidebar Dark</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Icon Color</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Gradient Color</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Box Shadow</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">RTL Support</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-switch">
                            <span class="custom-switch-description">Box Layout</span>
                            <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="form-group">
                <label class="d-block">Storage <span class="float-right">77%</span></label>
                <div class="progress progress-sm">
                    <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                </div>
                <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
            </div>
        </div>
    </div>
    
    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Default Theme</p>
                        <a href="index-2.html"><img src="assets/images/themes/default.png" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Night Mode Theme</p>
                        <a href="project-dark/index.html"><img src="assets/images/themes/dark.png" class="img-fluid" /></a>
                    </li>                    
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="project-rtl/index.html"><img src="assets/images/themes/rtl.png" class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="user_div">
        <h5 class="brand-name mb-4">User Details<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
        <div class="card-body">
            <a href="page-profile.html"><img class="card-profile-img" src="assets/images/sm/avatar1.jpg" alt=""></a>
            <h6 class="mb-0">User#1</h6>
            <span>Email</span>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar ">
        <center>
            <a class="header-brand" href="{{ url('/') }}"><img src="assets/images/logo_dark_variant.png" width="60%" height="60%" /></a>
            <a href="javascript:void(0)" class="menu_option float-right"><i class="fa fa-expand-arrows-alt" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a>
        </center>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading">Admin</li>
                <li class="active"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>                        
                <li><a href="#"> <i class="fa fa-users"></i><span>Clients</span></a></li>
                <li><a href="#"><i class="fa fa-clipboard"></i><span>Files</span></a></li>
                <li><a href="#"><i class="fa fa-shipping-fast"></i><span>Tracing</span></a></li>
                <li class="g_heading">Seller</li>
                <li><a href="#"><i class="fa fa-car"></i><span>Cars</span></a></li>             
                <li class="g_heading">Settings</li>
                <li><a href="#"> <i class="fa fa-user-cog"> </i> Profile</a></li>
                <li><a href="forgot-password.html"><i class="fa fa-sign-out-alt"></i> Logout</a></li>  

                </li>
            </ul>
        </nav>        
    </div>