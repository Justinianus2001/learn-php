<!DOCTYPE html>
<html lang="en">
<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
  <title>CoreUI Free Bootstrap Admin Template</title>
  <meta name="theme-color" content="#ffffff">
  <link href="../../../public/css/style.css" rel="stylesheet">
  <link href="../../../public/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  <meta name="robots" content="noindex">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-118965717-1');
  </script>
</head>
<body class="c-app">
  <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
      <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#full"></use>
      </svg>
      <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#signet"></use>
      </svg>
    </div>
    <ul class="c-sidebar-nav">
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="index.html">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
          </svg> Dashboard<span class="badge badge-info">NEW</span></a></li>
      <li class="c-sidebar-nav-title">Theme</li>
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="colors.html">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
          </svg> Colors</a></li>
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="typography.html">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
          </svg> Typography</a></li>
      <li class="c-sidebar-nav-title">Components</li>
      <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
          href="#">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
          </svg> Base</a>
        <ul class="c-sidebar-nav-dropdown-items">
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/breadcrumb.html"><span
                class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/cards.html"><span
                class="c-sidebar-nav-icon"></span> Cards</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/carousel.html"><span
                class="c-sidebar-nav-icon"></span> Carousel</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/collapse.html"><span
                class="c-sidebar-nav-icon"></span> Collapse</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/forms.html"><span
                class="c-sidebar-nav-icon"></span> Forms</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/jumbotron.html"><span
                class="c-sidebar-nav-icon"></span> Jumbotron</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/list-group.html"><span
                class="c-sidebar-nav-icon"></span> List group</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/navs.html"><span
                class="c-sidebar-nav-icon"></span> Navs</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/pagination.html"><span
                class="c-sidebar-nav-icon"></span> Pagination</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/popovers.html"><span
                class="c-sidebar-nav-icon"></span> Popovers</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/progress.html"><span
                class="c-sidebar-nav-icon"></span> Progress</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/scrollspy.html"><span
                class="c-sidebar-nav-icon"></span> Scrollspy</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/switches.html"><span
                class="c-sidebar-nav-icon"></span> Switches</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tables.html"><span
                class="c-sidebar-nav-icon"></span> Tables</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tabs.html"><span
                class="c-sidebar-nav-icon"></span> Tabs</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tooltips.html"><span
                class="c-sidebar-nav-icon"></span> Tooltips</a></li>
        </ul>
      </li>
      <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
          href="#">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
          </svg> Buttons</a>
        <ul class="c-sidebar-nav-dropdown-items">
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"><span
                class="c-sidebar-nav-icon"></span> Buttons</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/button-group.html"><span
                class="c-sidebar-nav-icon"></span> Buttons Group</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/dropdowns.html"><span
                class="c-sidebar-nav-icon"></span> Dropdowns</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/brand-buttons.html"><span
                class="c-sidebar-nav-icon"></span> Brand Buttons</a></li>
        </ul>
      </li>
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="charts.html">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
          </svg> Charts</a></li>
      <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
          </svg> Icons</a>
        <ul class="c-sidebar-nav-dropdown-items">
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-free.html"> CoreUI
              Icons<span class="badge badge-success">Free</span></a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-brand.html"> CoreUI
              Icons - Brand</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons
              - Flag</a></li>
        </ul>
      </li>
      <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
          href="#">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
          </svg> Notifications</a>
        <ul class="c-sidebar-nav-dropdown-items">
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/alerts.html"><span
                class="c-sidebar-nav-icon"></span> Alerts</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/badge.html"><span
                class="c-sidebar-nav-icon"></span> Badge</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/modals.html"><span
                class="c-sidebar-nav-icon"></span> Modals</a></li>
        </ul>
      </li>
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="widgets.html">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
          </svg> Widgets<span class="badge badge-info">NEW</span></a></li>
      <li class="c-sidebar-nav-divider"></li>
      <li class="c-sidebar-nav-title">Extras</li>
      <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle"
          href="#">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
          </svg> Pages</a>
        <ul class="c-sidebar-nav-dropdown-items">
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="login.html" target="_top">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
              </svg> Login</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="register.html" target="_top">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
              </svg> Register</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="404.html" target="_top">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
              </svg> Error 404</a></li>
          <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="500.html" target="_top">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
              </svg> Error 500</a></li>
        </ul>
      </li>
      <li class="c-sidebar-nav-item mt-auto"><a class="c-sidebar-nav-link c-sidebar-nav-link-success"
          href="https://coreui.io" target="_top">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
          </svg> Download CoreUI</a></li>
      <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-danger"
          href="https://coreui.io/pro/" target="_top">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
          </svg> Try CoreUI<strong>PRO</strong></a></li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
      data-class="c-sidebar-minimized"></button>
  </div>
  <div class="c-wrapper c-fixed-components">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
      <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
        data-class="c-sidebar-show">
        <svg class="c-icon c-icon-lg">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
        </svg>
      </button><a class="c-header-brand d-lg-none" href="#">
        <svg width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg></a>
      <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-lg-show" responsive="true">
        <svg class="c-icon c-icon-lg">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
        </svg>
      </button>
      <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
      </ul>
      <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
            <svg class="c-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
            </svg></a></li>
        <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
            <svg class="c-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
            </svg></a></li>
        <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
            <svg class="c-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
            </svg></a></li>
        <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
            role="button" aria-haspopup="true" aria-expanded="false">
            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"></div>
          </a>
          <div class="dropdown-menu dropdown-menu-right pt-0">
            <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
              </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
              </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
              </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
              </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
            <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
              </svg> Profile</a><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
              </svg> Settings</a><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
              </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
              </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
              </svg> Lock Account</a><a class="dropdown-item" href="#">
              <svg class="c-icon mr-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
              </svg> Logout</a>
          </div>
        </li>
      </ul>
      <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </header>
    <div class="c-body">
      <main class="c-main">
        <div class="container-fluid">
          <div class="fade-in">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">List Students</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-hover table-outline mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th class="text-center">
                            <svg class="c-icon">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                            </svg>
                          </th>
                          <th>User</th>
                          <th class="text-center">Country</th>
                          <th>Usage</th>
                          <th class="text-center">Payment Method</th>
                          <th>Activity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/1.jpg"
                                alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                          </td>
                          <td>
                            <div>Yiorgos Avraamu</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-us"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>50%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/2.jpg"
                                alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                          </td>
                          <td>
                            <div>Avram Tarasios</div>
                            <div class="small text-muted"><span>Recurring</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-br"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>10%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-visa"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/3.jpg"
                                alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
                          </td>
                          <td>
                            <div>Quintin Ed</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-in"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>74%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 74%"
                                aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-stripe"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>1 hour ago</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg"
                                alt="user@email.com"><span class="c-avatar-status bg-secondary"></span></div>
                          </td>
                          <td>
                            <div>Enéas Kwadwo</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-fr"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>98%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 98%"
                                aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-paypal"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>Last month</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg"
                                alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                          </td>
                          <td>
                            <div>Agapetus Tadeáš</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-es"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>22%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-apple-pay"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>Last week</strong>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">
                            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg"
                                alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                          </td>
                          <td>
                            <div>Friderik Dávid</div>
                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-pl"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left"><strong>43%</strong></div>
                              <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 43%"
                                aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <svg class="c-icon c-icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-amex"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="small text-muted">Last login</div><strong>Yesterday</strong>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="c-footer">
        <div><a href="https://coreui.io">CoreUI</a> © 2021 creativeLabs.</div>
        <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
      </footer>
    </div>
  </div>
  <script src="../../../public/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <!--[if IE]><!-->
  <script src="../../../public/vendors/@coreui/icons/js/svgxuse.min.js"></script>
  <!--<![endif]-->
  <script src="../../../public/vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js"></script>
  <script src="../../../public/vendors/@coreui/utils/js/coreui-utils.js"></script>
  <script src="../../../public/js/main.js"></script>
</body>
</html>