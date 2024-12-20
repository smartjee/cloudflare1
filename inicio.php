<?php
echo "<body class="theme-prism main-navbar-fixed main-menu-fixed page-profile animate-mm-sm animate-mm-md animate-mm-lg mmo light-theme" style="position: relative; min-height: 100%; top: 0px;" screen_capture_injected="true">

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
          <i class=" noip-icon-iconic-cog-blue page-header-icon"></i>Manage DNS Records
        </h1>
      </div>
    </div>
  </div>

</div>

<ul class="breadcrumb breadcrumb-page">
  <li><a href="/redirect/mynoip?force=true">My No-IP</a></li>
        <li class="active">Manage Hostnames</li>
</ul>
				<div class="row">
				    <div class="col-md-12">
				      <div class="profile-content">
																		
									<ul id="profile-tabs" class="nav nav-tabs nav-tabs-simple hidden-xs hidden-sm mb-20">
	<div class="pr-0 pl-0 pl-lg-0 pr-lg-0 pull-left d-inline"><a href="/members/dns/host.php" class=" btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10">Create Hostname</a></div><div class="pr-0 pl-0 pl-lg-0 pr-lg-0 pull-left d-inline"><a href="/members/dns/" class="youarehere active btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10">Manage DNS Records</a></div><div class="pr-0 pl-0 pl-lg-0 pr-lg-0 pull-left d-inline"><a href="/redirect/mynoip?force=true&intended=dynamic-dns/groups" class=" btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10">Manage Groups</a></div><div class="pr-0 pl-0 pl-lg-0 pr-lg-0 pull-left d-inline"><a href="/redirect/mynoip?force=true&intended=dynamic-dns/duc" class=" btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10">Dynamic Update Client</a></div>
</ul>

<!-- mobile button group -->
<div class="btn-group hidden-lg hidden-md mb-20">
  <button type="button" class=" btn btn-noip-blue btn-md btn-full nbr pt-10 pb-10 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manage DNS Links <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class=""><a href="/members/dns/host.php">Create Hostname</a></li><li class="youarehere active"><a href="/members/dns/">Manage DNS Records</a></li><li class=""><a href="/redirect/mynoip?force=true&intended=dynamic-dns/groups">Manage Groups</a></li><li class=""><a href="/redirect/mynoip?force=true&intended=dynamic-dns/duc">Dynamic Update Client</a></li>  </ul>
</div>									




<!-- <p> Manage hostnames in your No-IP account.  Select an action or add a host below</p> -->




<div class="profile-content">
	<div id="host-panel" class="panel">
		<div class="panel-heading">
			<div class="panel-heading-controls text-right row mb-0">
				<div class="full-width">
					<div class="pull-left text-semibold col-md-8 col-xs-12">
						<div class="pull-left d-block text-left mb-20 full-width text-bg ">Current Hostnames: 
							</div>
						<b class="d-block  pull-left full-width  text-left">Need More Hostnames?</b>
						
							<a data-product='[ { "product_name": "account.enhanced", "term": "1", "options": { "quantity": 1, "term_type": "monthly" } } ]'
 href="" class="text-success clickable-hover pull-left full-width pull-left full-width text-left">
								Enhance Your Account
							</a>
											</div>
					 <div class="pull-right-md col-md-4 col-xs-12 text-right-md text-left">
					 	<form method="post" action="/members/dns/" class="input-group has-feedback pull-right  no-padding">
					 		<input type="text" name="s" class="form-control" placeholder="Search..." value="">
					 		<span class="form-control-feedback text-muted" aria-hidden="true" style="right: 25px; top: 11px;"><i
					 				class="fa fa-times clickable-hover"></i></span>
					 		<span class="input-group-btn">
					 			<button type="submit" class="btn btn-success">
					 				<span class="fa fa-search"></span>
					 			</button>
					 		</span>
</form>

						
					</div>
				</div>
			</div>
		</div>

		<div class="panel mb-0">
			<table class="table no-margin-bv" cellspacing="0" summary="Hostnames/Redirects">

				<thead>
					<tr>
						<th class="col-md-5 col-xs-12 ">Hostname</th>
						<th class="hidden-sm hidden-xs">IP/URL</th>
													<th class="col-sm-2 hidden-sm hidden-xs">DDNS Key</th>
												<th class="hidden-sm hidden-xs">Action</th>

					</tr>
				</thead>"
				
																															
												
?>																																								
<?php
$file = fopen("host.txt");

?>											

<?php
																												
												
																																								

																			
									
											
echo "																																 <a href="?action=delete&id=88744915"
													class="btn btn-flat btn-outline btn-danger pl-10 pr-10 pt-6 pb-5 mb-10 d-inline btn-remove"><i
														class="fa fa-remove"></i></a>
																					
									</td>
								</tr>
																											</tbody>


			</table>
		</div>

		<div class="panel-footer">
												<a href="/members/dns/host.php" class="btn btn-flat btn-info btn-panel-footer pull-right"><span>Add A
							Hostname</span></a>
							
		</div>

	</div></div>
<div class="col-sm-12 elevation--z1 overlay--base p-15">

	<p class="text-bold mb-30">Help with DNS</p>

	<div class="row">
		<div class="col-sm-6">
			<div class="col-sm-2">
				<i class="fa fa-cogs text-slg text-center"></i>
			</div>
			<div class="col-sm-10">
				<p class="text-bold mb-5"><a
						href="https://www.noip.com/support/knowledgebase/how-to-configure-your-no-ip-hostname/"
						target="_blank">Configure Your No-IP Hostname</a></p>
				<p>Ever wondered what the difference between Round Robin, A, CNAME records, and more? Check out this
					quick guide of each DNS record type, as well as how you would use each of them. </p>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="col-sm-2 text-center">
				<i class="fa fa-question-circle text-slg"></i>
			</div>
			<div class="col-sm-10">
				<p class="text-bold mb-5"><a
						href="https://www.noip.com/support/knowledgebase/integrated-dynamic-dns-device/"
						target="_blank">Does your IP address keep changing?</a></p>
				<p>If so you have a Dynamic IP Address and you will need to install our Dynamic Update Client or
					configure your device to use No-IP.</p>
			</div>
		</div>
	</div>
</div>


<div class="col-sm-12 panel-footer">
	<h4>Add Google Apps to your Domain</h4>
	<p><a href="https://referworkspace.app.goo.gl/MVqo" target="_blank"
			onClick="ga('send', 'event', 'google-app-callouts', 'click', 'google-apps-logo');"><img width="140"
				src="//d2qr50rz2oof04.cloudfront.net/images/2013/google-apps-logo.png" alt="Try Google Apps"></a></p>
	<p class="gray size3 bold0 margin-top7">We have partnered with Google to allow you to easily add email, online
		storage, shared calendars, video meetings and more. Built for business, designed for teams. Learn how easy it is
		to integrate Google Apps with your domain today! <a class="nofloat"
			href="https://referworkspace.app.goo.gl/MVqo" target="_blank"
			onClick="ga('send', 'event', 'google-app-callouts', 'click', 'learn-more');">Learn More</a></p>
</div>



<script type="text/javascript" src="https://unpkg.com/tippy.js@2/dist/tippy.all.min.js"></script>
<script type="text/javascript">
	(function($) {

			$('.deleg_async').each(function() {
					var $el = $(this);

					var tippyIconIdSelect = '#' + $el.text().replace(/\./g, '-');

					var tippyContentIdSelect = '#' + 'cont_' + $el.text().replace(/\./g, '-');

					var tippyContentId = 'cont_' + $el.text().replace(/\./g, '-');

					$.getJSON('delegationCheck.php', {'do': 'get', 'domain': $el.html()}, function(data, stat) {})
					.done(function(data) {
							if (!data || !data.hasOwnProperty('deleg') || data['deleg'] == 'noip') {
								return;
							}

							template = document.createElement('div');

							template.setAttribute('id', tippyContentId);

							template.innerHTML = buildContent(data);

							document.body.appendChild(template);

							tippy(tippyIconIdSelect,
								{interactive: true,  html: document.querySelector(tippyContentIdSelect), arrow: true,maxWidth:"500px"});

								$el.closest('span').next().addClass('d-inline');
							})
						.fail(function(data) {
							return;
						});
					});

				var duckeyGroupHasPasswordContent = document.createElement('div'); duckeyGroupHasPasswordContent
				.innerHTML = "Hostname is in a " +
				"<a href='/redirect/mynoip?force=true&intended=dynamic-dns/groups' class='text-white link-underline'>group</a>" +
				" with a password. Remove the hostname from the group to create a DDNS Key."
				tippy(document.querySelectorAll(".duckey-unavailable-group-tip"), {interactive: true, arrow: true, maxWidth: "500px"});
				tippy(".duckey-unavailable-tip", {interactive: true, arrow: true, maxWidth: "500px"});
			})(jQuery);

		function buildContent(data) {

			let nameServers = '<b>Current Nameservers: <em>' + getNameServers(data) + '</em> </b>';

			let warning = '<p>If you recently registered or changed your nameservers this may not be correct</p>';

			let bulkContent =
				'<p>' +
				data.domain + ' does not appear to be delegated to No-IP.com.' +
				'Please manage the DNS records at your DNS provider ' + getDelegation(data) + ' or ' +
				buildDomainUrl(data) + ' ' +
				'<em>' + getType(data) + '</em>' +
				'</p>';

			return nameServers + warning + bulkContent;
		}

		function buildDomainUrl(data) {

			let link = document.createElement('a');

			link.setAttribute('class', 'semi-bold text-white');

			link.innerHTML = 'change them to No-IP&#39;s nameservers';

			if (!varExists(data) || !varExists(data.domain)) {
				link.setAttribute('href', '/members/registration/modify.php?domain=');
				return link.outerHTML;
			}

			link.setAttribute('href', '/members/registration/modify.php?domain=' + data.domain);

			return link.outerHTML;
		}

		function getNameServers(data) {
			if (!varExists(data) || !varExists(data.ns)) {
				return 'none';
			}

			return data.ns.join(", ");
		}

		function getDelegation(data) {
			if (!varExists(data) || !varExists(data.deleg)) {
				return '';
			}

			if (data.deleg != 'unknown') {
				return 'possibly ' + data.deleg;
			}

			return '';
		}

		function getType(data) {
			if (!varExists(data) || !varExists(data.type)) {
				return '';
			}

			if (data.type === 'primary') {
				return 'ns1.no-ip.com, ns2.no-ip.com, ns3.no-ip.com, ns4.no-ip.com';
			}

			if (data.type === 'static') {
				return 'static-1.no-ip.com, static-2.no-ip.com, static-3.no-ip.com';
			}

		}

		function varExists(variable) {
			return variable != undefined && variable.length != 0;
		}
</script>
<style>
	.warning-popper i {
		cursor: pointer;
	}

	.warning-popper i:hover,
	.warning-popper i:focus {
		color: #91161b;
	}

	@media (max-width: 510px) {
		.tippy-popper {
			max-width: max-content;
		}
	}
</style>



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
</html>"
?>
