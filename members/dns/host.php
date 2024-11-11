<html class="gt-ie8 gt-ie9 not-ie" lang="en" style="height: 100%;"><head>
  <title>My No-IP :: Managed DNS : Add a host</title>
  <meta charset="utf-8">
  <meta name="language" content="English">
  <meta id="token" name="token" content="BkoTFE0Uj74YkCn5bevXvAaj7fMJw9YZf4odl0nm">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <!-- Are the following meta tags even required since we aren't going to allow crawling of this page?!?! -->
  <meta http-equiv="Description" content="">
  <meta http-equiv="Keywords" content="">

  <link rel="shortcut icon" type="image/x-icon" href="//d2qr50rz2oof04.cloudfront.net/assets/img/2013/favicon.ico">

  <!-- Open Sans font from Google CDN -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

  <!-- Stylesheets -->
  <link href="//d2qr50rz2oof04.cloudfront.net/styles/console_styles/bootstrap.css?id=8b6b30f62abf86ce7090339198391b5d" rel="stylesheet" type="text/css">

      <link href="//d2qr50rz2oof04.cloudfront.net/styles/console_styles/common.css?id=c6d5727cfa0614cebf530284199539c8" rel="stylesheet" type="text/css">
  
  <link href="//d2qr50rz2oof04.cloudfront.net/styles/console_styles/widgets.css?id=e4f3211ca26d2e6c1bb54e3dd2c7bc0a" rel="stylesheet" type="text/css">


 <!-- <script src="//d2qr50rz2oof04.cloudfront.net/scripts/console_scripts/jquery.min.js"></script> -->
 <script src="https://code.jquery.com/jquery-2.2.4.min.js"
   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

 <script src="//d2qr50rz2oof04.cloudfront.net/scripts/console_scripts/bootstrap.min.js?id=75f86472fa4cad51138101f80166c04f"></script>
 <script src="//d2qr50rz2oof04.cloudfront.net/scripts/console_scripts/vendor.min.js?id=bd42094da3593ddd5b6cfacba23a204d"></script>
<script src="//d2qr50rz2oof04.cloudfront.net/scripts/host.jquery.js"></script>

  <link href="https://d2qr50rz2oof04.cloudfront.net/assets/build/css/mini_cart.css" rel="stylesheet" type="text/css">

<style type="text/css">

.truncate {
    display: block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 200px;
}
.bounce_it {
  color: #FFF !important;
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
  -webkit-animation-iteration-count: 3;
          animation-iteration-count: 3;
}
.theme-prism #main-navbar .navbar-nav > li > a.dropdown-danger:hover,
.theme-prism #main-navbar .navbar-nav > li.dropdown.open > a.dropdown-danger {
  background: transparent;
}


</style>



</head>

<body class="theme-prism main-navbar-fixed main-menu-fixed page-profile animate-mm-sm animate-mm-md animate-mm-lg mmo light-theme" style="position: relative; min-height: 100%; top: 0px;" screen_capture_injected="true">

  <!-- GDPR -->
    <!-- End GDPR -->

  <div id="main-wrapper" >
  <div>
  <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
    <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
    <div class="navbar-inner">
      <div class="navbar-header">
        <a class="navbar-brand" href="https://www.noip.com/"></a>
        <ul class="hidden-lg hidden-md hidden-sm pb-cart-mobile">
           <li class="top-nav-icon pb-cart pb-legacy">
             <div class="nav-link dropdown pb-dropdown mini-nav-hide">
               <a class="cart nav-link dropdown-toggle" href="#" data-toggle="dropdown" rel="nofollow" role="button" onClick="ga('send', 'event', 'navigation', 'button', 'view-cart');"><span class="badge-cart-items">...</span></a>
             </div>
           </li>
         </ul>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
          <i class="navbar-icon fa noip-icon-c-person"></i>
        </button>
      </div>
      <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
        <div>
          <ul class="nav navbar-nav">
            <li class="dropdown hidden-xs">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <span>
                    <i class="nav-icon fa fa-support"></i>
                    Support
                  </span>
                              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="https://www.noip.com/ticket">
                    <i class="fa fa-file"></i>Create Support Ticket
                  </a>
                </li>
                                  <li>
                    <a href="https://www.noip.com/priority-support">
                      <i class="nav-icon fa orange fa-bolt"></i>
                      Upgrade to Priority Support
                    </a>
                    <a href="tel:1-775-853-1883">
                      <i class="fa fa-phone"></i>+1 (775) 853-1883
                    </a>
                  </li>
                  <li>
                    <span class="pl-15" style="line-height: 40px;">
                      Support Code: <span class="pull-right pr-15">816 734 </span>
                    </span>
                  </li>
                  <li class="static">
                    Mon-Fri <span class="pull-right">6:30am-5:30pm PST</span>
                  </li>
                              </ul>
            </li>
          </ul>
          <div class="right clearfix">
            <ul class="nav navbar-nav pull-right right-navbar-nav">

              <li class="notifications nav-icon-btn dropdown nav-icon-btn-warning btn-danger" >

                <a href="#notifications" class="dropdown-toggle dropdown-danger"  data-toggle="dropdown">
                  <i class="nav-icon icon-only fa fa-bell-o animated shake bounce_it" ></i>
                  <span class="small-screen-text">Notifications</span>
                </a>
                <ul class="dropdown-menu widget-notifications no-padding" style="width: 340px">

                                                            <div class="notifications-list" id="main-navbar-notifications">
                      <div class="notification">
                      <a href="/redirect/mynoip?force=true&intended=account">
                        <div class="notification-title text-default">Complete Your Account</div>
                        <div class="notification-description">
                          Create a username now
                        </div>
                        <div class="notification-icon fa fa-user bg-danger"></div>
                      </a>
                      </div>
                    </div>
                                        
                    
                </ul>
              </li>

              

              <li class="top-nav-icon pb-cart pb-legacy">
                <div class="nav-link dropdown pb-dropdown mini-nav-hide">
                  <a class="cart nav-link dropdown-toggle" href="#" data-toggle="dropdown" rel="nofollow" role="button" onClick="ga('send', 'event', 'navigation', 'button', 'view-cart');"><span class="badge-cart-items">...</span></a>
                </div>
              </li>


              <li class="dropdown dropdown-language hidden-sm hidden-xs">
                <a href="#" id="t-language" data-toggle="modal" data-target="#language-modal">
                  <i class="nav-icon noip-icon-c-globe"></i>
                  <span class="hidden-sm hidden-xs">Language</span>
                </a>
              </li>
              <li id="user-email-container" class="dropdown">
                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                  <i class="nav-icon noip-icon-c-person"></i>
                  <div class="username">torresoctavio66@gmail.com</div>

                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="/redirect/mynoip?force=true&intended=account"><i class="noip-icon-c-person"></i>Account</a>
                  </li>
                  <li>
                    <a href="/redirect/mynoip?force=true&intended=account/invoices"><i class="fa fa-file-text-o"></i>Invoices</a>
                  </li>
                  <li>
                                          <a href="#" class="d-block theme-selector" data-theme="dark">
                        <i class="fa fa-moon-o"></i>
                        <span class="mm-text text-normal">Dark Mode</span>
                      </a>
                                      </li>
                  <li class="hidden-xs">
                    <a href="/logout" class="">
                      <i class="fa fa-sign-out"></i>
                      Log Out
                    </a>
                  </li>
                </ul>
              </li>
              <li class="hidden-sm hidden-md hidden-lg">
                <a href="/logout">
                  <i class="nav-icon fa fa-sign-out"></i>
                  Log Out
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div>
  <div id="main-menu" role="navigation">
    <div id="main-menu-inner">
      <ul class="navigation">
        <li id="dashboard-nav">
          <a href="/redirect/mynoip?force=true">
            <i class="menu-icon fa fa-dashboard"></i>
            <span class="mm-text mmc-dropdown-delay animated fadeIn">Dashboard</span>
          </a>
        </li>
        <li class="mm-dropdown mm-dropdown-root ">
          <a href="#">
            <i class="menu-icon noip-icon-c-globe"></i>
            <span class="mm-text mmc-dropdown-delay animated fadeIn">Dynamic DNS</span>
          </a>
          <ul class="mmc-dropdown-delay animated fadeIn">
                          <li>
                <a tabindex="-1" href="/redirect/mynoip?force=true&intended=dynamic-dns">
                  <span class="mm-text">No-IP Hostnames</span>
                </a>
              </li>
              <li>
                <a tabindex="-1" href="/members/dns/">
                  <span class="mm-text">Personal Hostnames</span>
                </a>
              </li>
                        <li>
                          <a tabindex="-1" href="/redirect/mynoip?force=true&intended=dynamic-dns/groups">
                <span class="mm-text">DDNS Keys / Groups</span>
              </a>
                          </li>
            <li>
              <a tabindex="-1" href="/redirect/mynoip?force=true&intended=dynamic-dns/duc">
                <span class="mm-text">Dynamic Update Client</span>
              </a>
            </li>
            <li class="">
              <a tabindex="-1" href="/members/account/client.php">
                <span class="mm-text">Update Clients</span>
              </a>
            </li>
            <li>
              <a tabindex="-1" href="/redirect/mynoip?force=true&intended=dynamic-dns/device-configuration-assistant">
                <span class="mm-text">Device Configuration Assistant</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="mm-dropdown mm-dropdown-root  open">
          <a href="#">
            <i class="menu-icon noip-icon-iconic-cog-blue"></i>
            <span class="mm-text mmc-dropdown-delay animated fadeIn">My Services</span>
          </a>
                    <ul class="mmc-dropdown-delay animated fadeIn" style="">
            <li class="">
              <a tabindex="-1" href="/redirect/mynoip?force=true&intended=dns/zones">
                <span class="mm-text">DNS Overview</span>
              </a>
            </li>
            <li class="youarehere active">
              <a tabindex="-1" href="/members/dns/">
                <span class="mm-text">DNS Records</span>
              </a>
            </li>
            <li class="">
              <a tabindex="-1" href="/members/registration/manage.php">
                <span class="mm-text">Domain Registration</span>
              </a>
            </li>
            <li class="">
              <a tabindex="-1" href="/members/mail/manage.php">
                <span class="mm-text">Email</span>
              </a>
            </li>
            <li class="">
              <a tabindex="-1" href="/members/monitoring/">
                <span class="mm-text">Server Monitoring</span>
              </a>
            </li>
            <li class="">
              <a tabindex="-1" href="/members/dns/manage_domains.php?type=squared">
                <span class="mm-text">Backup DNS</span>
              </a>
            </li>
            <li>
              <a tabindex="-1" href="/redirect/mynoip?force=true&intended=my-services/ssl-certificates">
                <span class="mm-text">SSL Certificates</span>
              </a>
            </li>
            <li>
              <a tabindex="-1" href="/vpn-ipvanish" target="_blank" rel="noopener noreferrer">
                <span class="mm-text">Anonymous Browsing VPN</span>
              </a>
            </li>
          </ul>
                  </li>
        <li class="mm-dropdown mm-dropdown-root ">
          <a href="#">
            <i class="menu-icon noip-icon-c-person"></i>
            <span class="mm-text mmc-dropdown-delay animated fadeIn">Account</span>
                          <span class="new-product">NEW FEATURE</span>
                      </a>
          <ul class="mmc-dropdown-delay animated fadeIn">
            <li>
              <a tabindex="-1" href="/redirect/mynoip?force=true&intended=account">
                <span class="mm-text">Account Info</span>
              </a>
            </li>
            <li>
              <a tabindex="-1" href="/redirect/mynoip?force=true&intended=account/security">
                <span class="mm-text">Security</span>
              </a>
            </li>
                          <li>
                <a tabindex="-1" href="/redirect/mynoip?force=true&intended=team-login/members">
                  <span class="mm-text">Team Login</span>
                  <span class="new-product">NEW</span>
                </a>
              </li>
                                      <li>
                <a tabindex="-1" href="/redirect/mynoip?force=true&intended=account/email-settings">
                  <span class="mm-text">Email Settings</span>
                </a>
              </li>
                                      <li>
                <a tabindex="-1" href="/redirect/mynoip?force=true&intended=account/payments">
                  <span class="mm-text">Payments / Invoices</span>
                </a>
              </li>
                        <li>
                              <a tabindex="-1" href="/redirect/mynoip?force=true&intended=account/subscriptions">
                  <span class="mm-text">Subscription Management</span>
                </a>
                <a tabindex="-1" href="/redirect/mynoip?force=true&intended=account/payment-management">
                  <span class="mm-text">Payment Methods</span>
                </a>
                          </li>
            <li>
              <a tabindex="-1" href="/redirect/mynoip?force=true&intended=referrals">
                <span class="mm-text">Referral Program</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="mm-dropdown mm-dropdown-root">
          <a href="#">
            <i class="menu-icon fa fa-support"></i>
            <span class="mm-text mmc-dropdown-delay animated fadeIn">Support Center</span>
          </a>
          <ul class="mmc-dropdown-delay animated fadeIn">
            <li>
              <a target="_blank" href="https://www.noip.com/support">Knowledge Base</a>
            </li>
            <li>
              <a href="https://www.noip.com/contact">Contact Us</a>
            </li>
            <li>
              <a href="https://www.noip.com/ticket/">Create Support Ticket</a>
            </li>
            <li>
              <a href="https://www.noip.com/ticket/">View Open Tickets</a>
            </li>
          </ul>
        </li>
              </ul>
              <div>
          <div class="menu-content">
            <a href="#" data-product='[ { "product_name": "support.priority", "term": "2" } ]'
               class="btn btn-flat btn-warning btn-block add-product mynoip-add-product text-white-space-break">
              Add Priority Support
            </a>
          </div>
        </div>
      </div>
    <footer class="p-absolute p-bottom-0 full-width p-3 border-0 border-top-0 d-block theme-toggle">
      <span>
                  <a href="#" class="d-block theme-selector" data-theme="dark">
            <i class="fa fa-moon-o"></i>
            <span class="mm-text text-normal">Dark Mode</span>
          </a>
              </span>
    </footer>
  </nav>
</div>
  <div id="content-wrapper"><div title="Services Overview">
  <div class="page-header">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="text-left-sm">
          <i class=" noip-icon-iconic-cog-blue page-header-icon"></i>Managed DNS : Add a host
        </h1>
      </div>
    </div>
  </div>

</div>

<ul class="breadcrumb breadcrumb-page">
  <li><a href="/redirect/mynoip?force=true">My No-IP</a></li>
    <li>
  <a href="/members/dns/">Managed DNS</a></li>
        <li class="active">Add a host</li>
</ul>
				<div class="row">
				    <div class="col-md-12">
				      <div class="profile-content">
																		
									<ul id="profile-tabs" class="nav nav-tabs nav-tabs-simple hidden-xs hidden-sm mb-20">
	<div class="pr-0 pl-0 pl-lg-0 pr-lg-0 pull-left d-inline"><a href="/members/dns/host.php" class="youarehere active btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10">Create Hostname</a></div><div class="pr-0 pl-0 pl-lg-0 pr-lg-0 pull-left d-inline"><a href="/members/dns/" class=" btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10">Manage DNS Records</a></div><div class="pr-0 pl-0 pl-lg-0 pr-lg-0 pull-left d-inline"><a href="/redirect/mynoip?force=true&intended=dynamic-dns/groups" class=" btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10">Manage Groups</a></div><div class="pr-0 pl-0 pl-lg-0 pr-lg-0 pull-left d-inline"><a href="/redirect/mynoip?force=true&intended=dynamic-dns/duc" class=" btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10">Dynamic Update Client</a></div>
</ul>

<!-- mobile button group -->
<div class="btn-group hidden-lg hidden-md mb-20">
  <button type="button" class=" btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manage DNS Links <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class="youarehere active"><a href="/members/dns/host.php">Create Hostname</a></li><li class=""><a href="/members/dns/">Manage DNS Records</a></li><li class=""><a href="/redirect/mynoip?force=true&intended=dynamic-dns/groups">Manage Groups</a></li><li class=""><a href="/redirect/mynoip?force=true&intended=dynamic-dns/duc">Dynamic Update Client</a></li>  </ul>
</div>									

<div class="page-profile">
  <div class="profile-content">
    <div id="tab-content">
				<div class="panel">
					<div class="panel-body">
						<form method="POST" class="mb-0">
						<input type="hidden" name="token" value="BQEvPJi73pxBTdGmrcn48AwS2I6I8Uax5AgyuHiI">
						<div class="form-layout">
							<h5>Hostname Information</h5>
							<div class="form-group">
																	<label class="control-label">Hostname</label>	<span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="A hostname is the unique name that will identify your computer. Pick something you will remember, such as yourname.serveftp.org."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
								<div class="row">
									<div class="col-sm-6">
										<div class="no-padding position-relative">										<input type="text" id="hostname" name="host[host]" value="" class=" form-control"/></div>
																			</div>

															            						                <select name="host[domain]" class="chosen-select">
	<optgroup label="No-IP Plus Domains">
</optgroup>	<optgroup label="Enhanced Dynamic DNS Domains">
	<option data-domain-type='enhanced' value="access.ly">access.ly</option>
	<option data-domain-type='enhanced' value="blogsyte.com">blogsyte.com</option>
	<option data-domain-type='enhanced' value="brasilia.me">brasilia.me</option>
	<option data-domain-type='enhanced' value="cable-modem.org">cable-modem.org</option>
	<option data-domain-type='enhanced' value="ciscofreak.com">ciscofreak.com</option>
	<option data-domain-type='enhanced' value="collegefan.org">collegefan.org</option>
	<option data-domain-type='enhanced' value="couchpotatofries.org">couchpotatofries.org</option>
	<option data-domain-type='enhanced' value="damnserver.com">damnserver.com</option>
	<option data-domain-type='enhanced' value="ddns.me">ddns.me</option>
	<option data-domain-type='enhanced' value="ditchyourip.com">ditchyourip.com</option>
	<option data-domain-type='enhanced' value="dnsfor.me">dnsfor.me</option>
	<option data-domain-type='enhanced' value="dnsiskinky.com">dnsiskinky.com</option>
	<option data-domain-type='enhanced' value="dvrcam.info">dvrcam.info</option>
	<option data-domain-type='enhanced' value="dynns.com">dynns.com</option>
	<option data-domain-type='enhanced' value="eating-organic.net">eating-organic.net</option>
	<option data-domain-type='enhanced' value="fantasyleague.cc">fantasyleague.cc</option>
	<option data-domain-type='enhanced' value="geekgalaxy.com">geekgalaxy.com</option>
	<option data-domain-type='enhanced' value="golffan.us">golffan.us</option>
	<option data-domain-type='enhanced' value="health-carereform.com">health-carereform.com</option>
	<option data-domain-type='enhanced' value="homesecuritymac.com">homesecuritymac.com</option>
	<option data-domain-type='enhanced' value="homesecuritypc.com">homesecuritypc.com</option>
	<option data-domain-type='enhanced' value="hopto.me">hopto.me</option>
	<option data-domain-type='enhanced' value="hosthampster.com">hosthampster.com</option>
	<option data-domain-type='enhanced' value="ilovecollege.info">ilovecollege.info</option>
	<option data-domain-type='enhanced' value="loginto.me">loginto.me</option>
	<option data-domain-type='enhanced' value="mlbfan.org">mlbfan.org</option>
	<option data-domain-type='enhanced' value="mmafan.biz">mmafan.biz</option>
	<option data-domain-type='enhanced' value="myactivedirectory.com">myactivedirectory.com</option>
	<option data-domain-type='enhanced' value="mydissent.net">mydissent.net</option>
	<option data-domain-type='enhanced' value="myeffect.net">myeffect.net</option>
	<option data-domain-type='enhanced' value="mymediapc.net">mymediapc.net</option>
	<option data-domain-type='enhanced' value="mypsx.net">mypsx.net</option>
	<option data-domain-type='enhanced' value="mysecuritycamera.com">mysecuritycamera.com</option>
	<option data-domain-type='enhanced' value="mysecuritycamera.net">mysecuritycamera.net</option>
	<option data-domain-type='enhanced' value="mysecuritycamera.org">mysecuritycamera.org</option>
	<option data-domain-type='enhanced' value="net-freaks.com">net-freaks.com</option>
	<option data-domain-type='enhanced' value="nflfan.org">nflfan.org</option>
	<option data-domain-type='enhanced' value="nhlfan.net">nhlfan.net</option>
	<option data-domain-type='enhanced' value="pgafan.net">pgafan.net</option>
	<option data-domain-type='enhanced' value="point2this.com">point2this.com</option>
	<option data-domain-type='enhanced' value="pointto.us">pointto.us</option>
	<option data-domain-type='enhanced' value="privatizehealthinsurance.net">privatizehealthinsurance.net</option>
	<option data-domain-type='enhanced' value="quicksytes.com">quicksytes.com</option>
	<option data-domain-type='enhanced' value="read-books.org">read-books.org</option>
	<option data-domain-type='enhanced' value="securitytactics.com">securitytactics.com</option>
	<option data-domain-type='enhanced' value="serveexchange.com">serveexchange.com</option>
	<option data-domain-type='enhanced' value="servehumour.com">servehumour.com</option>
	<option data-domain-type='enhanced' value="servep2p.com">servep2p.com</option>
	<option data-domain-type='enhanced' value="servesarcasm.com">servesarcasm.com</option>
	<option data-domain-type='enhanced' value="stufftoread.com">stufftoread.com</option>
	<option data-domain-type='enhanced' value="ufcfan.org">ufcfan.org</option>
	<option data-domain-type='enhanced' value="unusualperson.com">unusualperson.com</option>
	<option data-domain-type='enhanced' value="workisboring.com">workisboring.com</option>
</optgroup>	<optgroup label="No-IP Free Domains">
		<option data-domain-type='free' value="zapto.org"selected>zapto.org</option>
		<option data-domain-type='free' value="3utilities.com">3utilities.com</option>
		<option data-domain-type='free' value="bounceme.net">bounceme.net</option>
		<option data-domain-type='free' value="ddns.net">ddns.net</option>
		<option data-domain-type='free' value="ddnsking.com">ddnsking.com</option>
		<option data-domain-type='free' value="freedynamicdns.net">freedynamicdns.net</option>
		<option data-domain-type='free' value="freedynamicdns.org">freedynamicdns.org</option>
		<option data-domain-type='free' value="gotdns.ch">gotdns.ch</option>
		<option data-domain-type='free' value="hopto.org">hopto.org</option>
		<option data-domain-type='free' value="myddns.me">myddns.me</option>
		<option data-domain-type='free' value="myftp.biz">myftp.biz</option>
		<option data-domain-type='free' value="myftp.org">myftp.org</option>
		<option data-domain-type='free' value="myvnc.com">myvnc.com</option>
		<option data-domain-type='free' value="onthewifi.com">onthewifi.com</option>
		<option data-domain-type='free' value="redirectme.net">redirectme.net</option>
		<option data-domain-type='free' value="servebeer.com">servebeer.com</option>
		<option data-domain-type='free' value="serveblog.net">serveblog.net</option>
		<option data-domain-type='free' value="servecounterstrike.com">servecounterstrike.com</option>
		<option data-domain-type='free' value="serveftp.com">serveftp.com</option>
		<option data-domain-type='free' value="servegame.com">servegame.com</option>
		<option data-domain-type='free' value="servehalflife.com">servehalflife.com</option>
		<option data-domain-type='free' value="servehttp.com">servehttp.com</option>
		<option data-domain-type='free' value="serveminecraft.net">serveminecraft.net</option>
		<option data-domain-type='free' value="servemp3.com">servemp3.com</option>
		<option data-domain-type='free' value="servepics.com">servepics.com</option>
		<option data-domain-type='free' value="servequake.com">servequake.com</option>
		<option data-domain-type='free' value="sytes.net">sytes.net</option>
		<option data-domain-type='free' value="viewdns.net">viewdns.net</option>
		<option data-domain-type='free' value="webhop.me">webhop.me</option>
</optgroup>
</select>

						            									
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Hostname Type</label>
								<div class="row">
									<div class="col-md-4">
										<div class="radio">
							        <label class="pull-left">
							          <input type="radio" class="px hosttype" id="dns_a" name="host[type]" checked="checked" value="a"/>
							          <span class="lbl">DNS Hostname (A)</span>
							        </label>
											 <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="<b>DNS Host (A):</b> This is the most common choice. It maps your hostname to an IP address."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
							      </div>

										<div class="radio">
							        <label class="pull-left">
							          <input type="radio" class="px hosttype" id="dns_rr" name="host[type]"  value="rr" />

							          <span class="lbl">DNS Hostname (Round Robin)</span>
							        </label>
											 <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="<b>DNS Host (Round Robin):</b> This maps your hostname to multiple IP address. Only used 
			for DNS based load balancing (not common)."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
							      </div>

																		<div class="radio mb-10">
										<label class="pull-left">
											<input type="radio" class="px hosttype" id="dns_cname" name="host[type]"  value="cname" />

											<span class="lbl">DNS Alias (CNAME)</span>
										</label>
										 <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="<b>DNS Alias (CNAME):</b> This maps your hostname to another hostname. It is useful 
			for pointing many hosts to the same place and updating them easily."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
									</div>
																	</div>
								<div class="col-md-4">
									<div class="radio">
										<label class="pull-left">
											<input type="radio" class="px hosttype" id="dns_port" name="host[type]"  value="port" />

											<span class="lbl">Port 80 Redirect</span>
										</label>
										 <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="<b>Port 80 Redirect:</b> Port 80 redirects are used to get around ISPs that block 
			inbound port 80. By using the this and running your webserver on an alternate port 
			users can access your site without having to enter the port number in the url."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
									</div>


									<div class="radio">
										<label class="pull-left">
											<input type="radio" class="px hosttype" id="dns_web" name="host[type]"  value="redirect" />

											<span class="lbl">Web Redirect</span>
										</label>
										 <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="<b>Web Redirect:</b> This maps your hostname to a URL. Web Redirects only work for 
			HTTP and cannot be used to remotely access your computer."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
									</div>

																		<div class="radio last">
										<label class="pull-left" id="ipv6-radio-create">
											<input type="radio" class="px hosttype" id="dns_aaaa" name="host[type]"  value="aaaa" />
											<span class="lbl">AAAA (IPv6)</span>
										</label>
																				<span id="ipv6-redirect-messaging-create" class="lbl">
											<a href="/redirect/mynoip?force=true&intended=dynamic-dns">
											Looking to create AAAA Hostnames on No-IP domains?
											</a>
										</span>
																			</div>
									
																		</div>
								</div>
							</div>

							<noscript><h5>These options only apply to DNS Hostname (A) records. Enabling Javascript makes this page much easier to use.</h5></noscript>

							<div id="set_a" title="DNS Hostname (A) Options">
								<div class="form-group">

								<div class="row">

									<div class="col-sm-6">
										<label class="control-label">IP Address</label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="An IP address is a number that identifies your computer on an IP network like the Internet. E.g., 204.16.252.98."><i class="fa fa-info-circle host-info-icon text-muted"></i></span><div class="no-padding position-relative">
																						<input type="text" id="ip" name="host[ip]" class="ip  form-control" value="190.90.15.97" /></div>
											</div>
									

								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Wildcard</label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="A wildcard makes all subdomains resolve to the same record as the parent. So if you enabled wildcard for wc.example.com, 
                anything.wc.example.com would resolve to the same address as wc.example.com without explicitly creating that host. This is 
                useful if you want to set up many virtual hosts for your personal web server.<br/>&nbsp;<br/>This option is always enabled for Basic DNS service domains."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
								<div class="row">
									<div class="col-sm-6">
																												Wildcards are a Plus / Enhanced feature. <a  data-product='[ { "product_name": "account.enhanced", "term": "1", "options": { "quantity": 1,
									"term_type": "monthly" } } ]'  href="" >Upgrade Now!</a>
																												</div>
								</div>
							</div>
																					</div>

							<noscript><h5>These options only apply to Round Robin records. Enabling Javascript makes this page much easier to use.</h5></noscript>

							<div id="set_rr" title="Round Robin Options">

																<p>Round Robin records are a No-IP Plus / Enhanced feature. <a  data-product='[ { "product_name": "account.enhanced", "term": "1", "options": { "quantity": 1,
									"term_type": "monthly" } } ]'  href="" >Upgrade Now!</a></p>
								<input type="hidden" id="nlocations" name="nlocations" value="0" />
								
							</div>

														<noscript><h5>These options only apply to CNAME records. Enabling Javascript makes this page much easier to use.</h5></noscript>
							<div id="set_cname">
								<div class="form-group">
								<label class="control-label">Target </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="The target host is a hostname that the host you are creating resolves to.  
	                This host must be an actual hostname that resolves to an IP address."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
								<div class="row">
									<div class="col-sm-6">
										<div class="no-padding position-relative">
																						<input type="text" id="target" name="host[alias]" class="  form-control" value="" />
																				<div class="col-sm-12 text-md-lh pl-0 pr-0 pt-5 error-text">An CNAME target <b>must</b> be a valid hostname</div>
										</div>
									</div>

								</div>
							</div>
								<div class="form-group">
									<label class="control-label">Wildcard </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="A wildcard makes all subdomains resolve to the same record as the parent. So if you enabled wildcard for wc.example.com, 
                anything.wc.example.com would resolve to the same address as wc.example.com without explicitly creating that host. This is 
                useful if you want to set up many virtual hosts for your personal web server.<br/>&nbsp;<br/>This option is always enabled for Basic DNS service domains."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
									<div class="row">
										<div class="col-sm-6">
																																			<p class="upgrade-msg">Wildcards are a Plus / Enhanced feature. <a  data-product='[ { "product_name": "account.enhanced", "term": "1", "options": { "quantity": 1,
									"term_type": "monthly" } } ]'  href="" >Upgrade Now!</a></p>
																							
										</div>
									</div>
								</div>
							</div>
							
							<noscript><h5>These options only apply to IPv6 AAAA Records. Enabling Javascript makes this page much easier to use.</h5></noscript>
							<div id="set_aaaa" title="IPv6 AAAA Records">
								<label class="control-label">IPv6 Address:</label>
								<div class="row">
									<div class="col-sm-6"><input type="text" class="host form-control" name="host[ipv6]" value="" placeholder="(example: 2001:05c0:1000:000b::213d)" />
									</div>
								</div>
							</div>

							<noscript><h5>These options only apply to ANAME Follower Records. Enabling Javascript makes this page much easier to use.</h5></noscript>
						    <div id="set_aname" title="DNS ANAME Records">
						        <label class="control-label">ANAME Target:</label>
						        <div class="row">
											<div class="col-sm-6">
						            <input type="text" class="host form-control" name="host[aname]" placeholder="(example: domain.com.examplevm.host.net)" value="" />
											</div>

						        </div>
						    </div>


							<noscript><h5>These options only apply to Port 80 Redirect records. Enabling Javascript makes this page much easier to use.</h5></noscript>

							<div id="set_port" title="Port 80 Redirect Options">

								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label class="control-label">IP Address </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="An IP address is a number that identifies your computer on an IP network like the Internet. E.g., 204.16.252.98."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
											<div class="no-padding position-relative">
																								<input type="text" class="ip form-control " id="port_ip" name="host[port][ip]" value="190.90.15.97" />
																			</div>

									</div>

									<div class="col-sm-6">
									<label class="control-label">Port </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="This should be set to the port you have your webserver running on. 
		The port should also be opened or forwarded on your firewall or router."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
										<div class="no-padding position-relative">
																						<input type="text" class="form-control sm " id="" name="host[port][port]" value="8080" />
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Enable Wildcard </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="A wildcard makes all subdomains resolve to the same record as the parent. So if you enabled wildcard for wc.example.com, 
                anything.wc.example.com would resolve to the same address as wc.example.com without explicitly creating that host. This is 
                useful if you want to set up many virtual hosts for your personal web server.<br/>&nbsp;<br/>This option is always enabled for Basic DNS service domains."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
								<div class="row">
									<div class="col-sm-6">
																													Wildcards are a Plus / Enhanced feature. <a  data-product='[ { "product_name": "account.enhanced", "term": "1", "options": { "quantity": 1,
									"term_type": "monthly" } } ]'  href="" >Upgrade Now!</a>
																												</div>
							</div>
						</div>
								
							</div>

							<noscript><h5>These options only apply to Web Redirect records. Enabling Javascript makes this page much easier to use.</h5></noscript>

							<div id="set_redirect" title="Web Redirect Options">
								<div class="form-group">
								<label class="control-label">URL </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="This is the location to which your hostname will redirect. For example, postsecret.blogspot.com/"><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
								<div class="row">
									<div class="col-sm-2"><select class="sm chosen-select" name="host[redirect][protocol]">
										<option value="http" >http://</option>
										<option value="https" >https://</option>
									</select></div>
									<div class="col-sm-4">
										<div class="no-padding position-relative">
																						<input type="text" id="url" class="form-control " name="host[redirect][url]" value="" />									</div>
									</div>


								</div>
								</div>

								<div class="form-group">
									<label class="control-input">Wildcard </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="A wildcard makes all subdomains resolve to the same record as the parent. So if you enabled wildcard for wc.example.com, 
                anything.wc.example.com would resolve to the same address as wc.example.com without explicitly creating that host. This is 
                useful if you want to set up many virtual hosts for your personal web server.<br/>&nbsp;<br/>This option is always enabled for Basic DNS service domains."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
								<div class="row">
									<div class="col-sm-12">																				Wildcards are a Plus / Enhanced feature. <a  data-product='[ { "product_name": "account.enhanced", "term": "1", "options": { "quantity": 1,
									"term_type": "monthly" } } ]'  href="" >Upgrade Now!</a>
																			</div>

								</div></div>
								
							</div>





												<div id="offline"></div>
						


						<div id="masking" class="form-layout masking">
							<hr class="panel-wide">
							<h5>Mask / Cloaking Options</h5>
							<div class="form-group mb-25">
								<div class="row">
									<div class="col-sm-6">
										<label class="control-label pt-7">Mask URL </label>	<span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="If checked the browsers location bar will show only your hostname, not the page they have been redirected to. 
					This is done with a frameset."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
										<div class="radio last">
											<label class="pull-left">
												<input id="mask-url" class="px" type="checkbox" name="host[mask][is_masq]" value="1" />
												<span class="lbl">
													<label for="mask-url" class="mb-10" >Enable Mask URL</label>
												</span>
											</label>

										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
								<label class="control-label">Page Title </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="If Mask URL is enabled, you can use this option to set the title of the page that will be seen 
					at the top of the browser or when the page is bookmarked."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>

									<div class="position-relative no-padding">
																				<input type="text" class="form-control " name="host[mask][title]" value="" />
																	</div>

								</div>
							</div>
						</div>
						<div class="form-group">

								<label class="control-label">Meta Keywords </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="If Mask URL is enabled, a meta tag containing the supplied keyworks is added to the header of the page to aid in
					search engine optimization."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
							<div class="row">
								<div class="col-sm-6">

									<div class="no-padding position-relative">
																				<textarea class="form-control " name="host[mask][meta_keywords]"></textarea>
																			</div>

								</div>
							</div>
						</div>
						<div class="form-group">
							<lable class="control-label">Meta Description </label> <span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="If Mask URL is enabled, a meta tag containing the supplied description is added to the header of the page to aid in
					search engine optimization."><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
								<div class="row">
									<div class="col-sm-6">
										<div class="no-padding position-relative">
																						<textarea class="form-control " name="host[mask][meta_desc]"></textarea>
																						</div>
								</div>
							</div>
						</div>
				</div>

						<div class="mxopts">
							<hr class="panel-wide">
							<h5>Mail Options</h5>
							<div class="form-group"><div class="row"><div class="col-sm-12"><div class="text-semibold">Accept Mail for your Domain</div><p class="mb-0">Let No-IP do the dirty work. Setup <a href="/members/account/domain.php?type=mail">POP</a> or <a href="/members/account/domain.php?type=mail">forwarding</a> for your name.</p></div></div></div>

							<div class="form-group" id="set_mx"><div class="row"><fieldset  class="col-sm-12">
							<p>Enter the name of your external mail exchangers (mx records) as hostnames <b>not IP addresses</b>.
														</p>

																					<div class="form-group">
																														<div class="row">
										<div class="col-sm-6">
											<label class="control-label">MX Record </label>
																							<span data-tippy-delay="0" data-tippy-arrow="true" data-tippy-size="small" data-tippy-animation="shift-toward" class="popover-info popover-colorful popover-dark n-mt-5" role="button" aria-describedby="tippy-tooltip" data-tippy title="MX records are attached to a hostname to tell email server where email for that hostname should be delivered.
			The email server will try each hostname according to its priority in order until it finds one that responds.<br/>&nbsp;<br/>MX records must be hostnames that resolve to IP addresses. <em>Do not use a CNAME!</em>"><i class="fa fa-info-circle host-info-icon text-muted"></i></span>
																					</div>
																											<div class="col-sm-6">
										<label class="control-label full-width">MX Priority</label>
									</div>
								</div>
																		<div class="row mxrow mb-15 pl-10 pr-10" id="mxrow-0" style="display:block;">


																				<input type="text" name="host[mx][0][mx]" class="form-control mx col-sm-6 " value="" data-id="0" />
										
																		
																		<select name="host[mx][0][priority]" class="priority chosen-select">
																				<option value="5">5</option>
																				<option value="5"  selected="selected">5</option>
										<option value="10" >10</option>
										<option value="15" >15</option>
										<option value="20" >20</option>
										<option value="25" >25</option>
									</select>
																	</span>

							</div>

														<a href="#" id="addmx" class="btn btn-labeled btn-success auto-height mt-15 addmx" ><span class="btn-label"><i class="fa fa-plus"></i></span>Add MX Record</a>
							</div>
														<p>If you would like more MX records, please upgrade to <a href="/members/account/domain.php?type=plus">No-IP Plus</a> or <a data-product='[ { "product_name": "account.enhanced", "term": "1", "options": { "quantity": 1, "term_type": "monthly" } } ]' href="">Enhanced</a>.</p>
													</fieldset></div></div>
							<fieldset id="set_nomx">
								<p>MX records cannot be used with CNAME records (DNS aliases).
								If you need to have mail for your host consider using the
								DNS Hostname (A) or Web Redirect host type options.</p>
							</fieldset>
						</div>




						<div class="form-footer text-right">
							<input type="hidden" name="do" value="create">
							<input type="reset" id="revert" class="btn btn-round-corners btn-blue-outline btn-outline" alt="Revert">
							<input type="submit" value="Add Hostname" class="btn btn-success" alt="Create host">
						</div>
						</div>


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="https://unpkg.com/tippy.js@1.4.2/dist/tippy.js"></script>
<script type="text/javascript">

tippy('.popover-info',{arrow: true});

// Redirect for opening hostname modal in mynoip
function redirectToDynamicDns () {
	var hostname = null;

	if ($("#hostname").val()) {
		hostname = $("#hostname").val() + '.' + $("select[name='host[domain]'].chosen-select").find(":selected").val();
	}

	if (! hostname) {
		hostname = $("#hostname").text();
	}

	if (hostname == '') {
		hostname = 'new';
	}
	window.location.href = '/redirect/mynoip?force=true&intended=dynamic-dns&edit_hostname=' + hostname;
}

// For hiding and showing ipv6 redirect
var selected_domain_type = '';

$(document).ready(function() {
  selected_domain_type = $("select[name='host[domain]'].chosen-select").find(":selected").attr('data-domain-type');
  toggleIpv6Messaging(selected_domain_type);
});

$("select[name='host[domain]'].chosen-select").on('change', function (e) {
  selected_domain_type = $("select[name='host[domain]'].chosen-select").find(":selected").attr('data-domain-type');
  toggleIpv6Messaging(selected_domain_type);
});


function toggleIpv6Messaging(selected_domain_type) {
  if (selected_domain_type === undefined || selected_domain_type == 'free' || selected_domain_type == 'enhanced') {
    $("#ipv6-redirect-messaging-create").show();
    $("#ipv6-radio-create").hide();
		$("#ipv6-radio-create :input").prop("disabled", true);
    return;
  }

	if (selected_domain_type == 'plus') {
    $("#ipv6-radio-create").show();
		$('#ipv6-redirect-messaging-create').hide();
		$("#ipv6-radio-create :input").prop("disabled", false);
    return;
  }

}

$(function() {
	$('.addmx').click(function(e){
		e.preventDefault();
   	$mailrow = $('.mxrow').filter(":visible");
		if($mailrow.next().length>0){
	        $mailrow.next().show();
	    }else{
	         $('.mxrow')[0].show();
	    }
	});
	$('.addmx').on('click', function(e) {
		e.preventDefault();
		$(this).next('.mxrow').show();
	});
	$('.btn-remove').on('click',function(e) {
		e.preventDefault();
		$(this).siblings('input:text').closest('.mx').val('');
		$(this).closest('.mxrow').hide();
	});
	$('.mx').keyup(function() {
  if ($(this).val().length > 0) {
    $(this).closest('.mxrow').show();
  }
}).keyup();

});

</script>

			<div class="row"><div class="col-xs-12 text-muted"><small>leg@2c1d9f5 2024-11-07T17:32:40Z</small></div></div>
		</div><!-- right-inner -->
	</div> <!-- right column -->
	<div class="clearme"></div>
</div>
<footer style="display: none;">
  <div class="row">
    <div class="col-xs-12">
      <span class="text-muted text-center link-cursor">
        <small>
          <span class="link-footer">View Full Site</span>
          <span class="link-footer" style="display: none;">View Mobile Site</span>
        </small>
      </span>
    </div>
  </div>
</footer>
<div id="main-menu-bg"></div>
</div>


      </div>
    </div>
    <div class="modal fade modal-update text-center modal-title-noicon" tabindex="-1" role="dialog" id="language-modal" aria-hidden="false">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <span class="fa-icon-inline">
              <i class="fa "></i>
            </span>

            <span class="modal-title  text-semibold">Please select your language</span>

        </div>
        <div class="mx-panel pt-0 pb-0 mb-0 mt-10 hidden-smxs-down">
        </div>
        <div class="modal-body">
          <p class="pb-40">To view website content in your language, please select an option below.</p>
      <div id="google_translate_element" class="google-translate-element pt-sm-45 pt-30"></div>
      
			<script type="text/javascript">
			function googleTranslateElementInit() {
			  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, gaTrack: true, gaId: 'UA-31174-1'}, 'google_translate_element');
			}
			</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
			

      </div>
      <div class="modal-footer">
        <button class="btn btn-flat btn-round-corners btn-blue-outline btn-outline" data-dismiss="modal">
          <div>
            Close
          </div>

        </button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(function() {
  $('#main-menu li').on('click', function(){
      $('.mm-dropdown-root').removeClass('open').removeClass('show');
      $('#dashboard-nav').removeClass('open');
      $(this).addClass('open').delay(250);
      if ($('body').hasClass('mmc')){
          console.log('words');
        $('.mm-dropdown-root').removeClass('show');
        $(this).addClass('show');
      }
  });
  $('#main-menu-toggle').click(function() {
    if ($('body').hasClass('mmc')){
        $('body').removeClass('mmc');
    } else if($('body').hasClass('mme')){
        $('body').removeClass('mme');
    } else {
      if ( $(window).width() > 767) {
        $('body').addClass('mmc');
      } else {
        $('body').addClass('mme');
      }
    }
    });
  var deviceAgent = navigator.userAgent.toLowerCase();
  var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
      if (agentID) {
  	     $('html').addClass('ios');
      }
  var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
      if (isSafari) {
        console.log('ios');
        $('html').addClass('ios');
      }
  $(".theme-selector").click(function (event) {
      event.preventDefault();
      $.ajax('/members/account/theme', {
          method: 'POST',
          data: {
              theme: $(event.delegateTarget).attr('data-theme')
          }
      }).always(function () {
          window.location.reload();
      })
  });
});
var config = {
  '.chosen-select': {}
}
for (var selector in config) {
  $(selector).chosen(config[selector]);
}
</script>


<script src="https://d2qr50rz2oof04.cloudfront.net/assets/build/js/miniCart.widget.js"></script>
<div id="noip-cart"  class="pb-no-tos-banner"  data-cart_key="VlCSiRasUaqaZRdH7RfuL2JdDzNEgjRq"></div>
  </body>
</html>
