=== Inactive Logout ===
Contributors: j__3rk
Tags: logout, inactive user, idle, idle logout, idle user, auto logout, autologout, inactive, inactive, automatic logout, multisite autologout, multisite inactive logout, multisite inactive user, multisite, concurrent logout, multiple sessions, multiple user logout, concurrent login
Donate link: https://deepenbajracharya.com.np/donate/
Requires at least: 4.6.0
Tested up to: 5.2
Stable tag: 1.9.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Logs out users within defined time when inactive. Modify to show only wake up message and not log out as well. Supported for multisites as well.

== Description ==

Protect your WordPress users' sessions from shoulder surfers and snoopers!

Use the Inactive Logout plugin to automatically terminate idle user sessions, thus protecting the site if the users leave unattended sessions.

The plugin is very easy to configure and use. Once you install and activate the plugin simply configure the idle timeout from the plugin settings. So now any unattended idle WordPress user sessions will be terminated automatically. You can also display a custom message to idle user sessions, alerting them that the session is about to end.

Please refer to FAQ section if you have trouble activating plugin from version 1.6.0

**Please check [changelog](https://wordpress.org/plugins/inactive-logout/#developers "Change Log") to see what is added from version 1.3.0**

**Some Feature Highlights**.

1. Change idle timeout time.
2. Count down of 10 seconds before actual logout. You can remove this feature if you dont want it.
3. Add only **Wake Up!** message where user will not logout but instead a wakeup message will be shown upon inactive.
4. Custom Popup Message.
5. Choose to use concurrent logout functionality derived from [prevent concurrent logins](https://wordpress.org/plugins/prevent-concurrent-logins/ "Prevent Concurrent Logins") by Frankie Jarrett. Thumbs up here too !
6. Redirect to a Different Page instead of Popup box. Create a page such as timeout page and add your content there by creating a blank template or style it as you wish according to your theme.
7. Multiple User Role Configurations for individual timeout and redirects.
8. Clean UI
9. Simple to use
10. Multi browser tab support: Means that logout will not happen even if the user has multiple browser tabs opened and is active in certain browser tab.
11. Multisite Support: Override all sites with one setting.
12. Auto browser close logout after 2 minute of active session. **[PRO](https://www.codemanas.com/downloads/inactive-logout-pro/ "PRO")**
13. Override Multiple Login priority **[PRO](https://www.codemanas.com/downloads/inactive-logout-pro/ "PRO")**

In order to style dialog boxes you can use css classes. Also, works in **frontend view as well**.

**Filter Hooks**
1. add_filter('ina__redirect_message', 'callback' );
- For changing "You have been logged out because of inactivity. Please wait while we redirect you to a certain page..." this message.
Reference: [GIST FILE](https://gist.github.com/techies23/9046a82671b994c20237a177838b70a2 "Check how to use this")

2. add_filter('ina__logout_message', 'callback' );
- For changing "You have been logged out because of inactivity."
Reference: [GIST FILE](https://gist.github.com/techies23/9046a82671b994c20237a177838b70a2 "Check how to use this")

Lemme know if there are any bugs and problems or enhancements you want to make..

**See the [Inactive Logout](https://deepenbajracharya.com.np/wp-inactive-logout/ "Inactive Logout") homepage for further information. Contact Developer for those who need to write plugins.**

**There's a [GIT repository](https://github.com/techies23/Inactive-Logout.git "Github Inactive Repository") too if you want to contribute a patch. Please check issues. Pull requests are welcomed.**

**Please consider giving a [5 star thumbs up](https://wordpress.org/support/plugin/inactive-logout/reviews/#new-post "5 star thumbs up") if you found this useful.**

== Installation ==

Upload the plugin to your blog, Activate it, Load...and You're done!

== Frequently Asked Questions ==

= Auto logut when browser close version ( in beta ) =

This feature has been moved to PRO version of the plugin.

= Plugin Conflicts =

Slim Stat Analytics: Users using "Slimstat Analytics" plugin version upto 4.6.2 might find conflict issue with colorpicker javascript library. This conflict was identified by [psn](https://wordpress.org/support/users/psn/ "PSN") and has been fixed in later versions of slim stat analytics.

= Popup Modal Customization HTML Render Elements =

* For Default popup customization: [Code](https://gist.github.com/techies23/e9b54467b05f25f189ed5ff52375ef41 "Default popup code")
* For Wakeup popup customization: [Code](https://gist.github.com/techies23/546b9a85eda645207704cb9cf1cf8a9a "Wakeup popup code")

== Screenshots ==

1. Showing Inactive Logout Settings Page.
2. Wakeup functionality message box.
3. Session going to logout if continue is clicked then session will not end.
4. Multi User Role Screen

== Changelog ==

= 1.9.2 =
* Fixed: Condition check for modal popup if inactive logout feature is disabled.
* Fixed: Error https://wordpress.org/support/topic/fatal-error-uncaught-error-34/
* Fixed: https://wordpress.org/support/topic/setting-message-text/
* Added: Hooks
* Changes: Minor bug fixes

= 1.9.1 =
* Fixed: issue with multiple browser tab
* Fixed: JS frontend builder issue for Divi - Not tracking when on frontend builder
* Fixed: resetTimer method not being found and js crash
* Fixed: (Active element) When editing in wp editor or iframe countdown is not implemented.
* Changed: Javascript code refactored
* Removed: goActive method which was unnecessary

= 1.9.0 =
* Changed: Javascript methods changed to modular.
* Added: Pro Tab added in settings page
* Added: Hook priorities for ending conflicts
* Changed: Helper function now into singleton
* Added: SASS compilation
* Removed: INA_VERSION constant
* Bug Fix: Multi-Role fixes
* Bug Fixes

= 1.8.0/1.8.2 =
* Added: Auto logout when browser is closed - follow link in the description to download beta plugin.
* Major bug fixes
* Code refactor

= 1.7.9 =
* Minor fixes

= 1.7.8 =
* Minor fix where scripts are prioritized.

= 1.7.7 =
* Filter Added: Two filters added for changing text when logout.
* Removed debugger code from JS file.
* Minor Bug Fixes

= 1.7.6 =
* Bug Fix: Advanced Management Tab not showing save changes button.

= 1.7.5 =
* Fix on minor conflict issues
* Code Refactor
* Text hint changes

= 1.7.4 =
* Minor Changes
* Code Refactor

= 1.7.3 =
* Added: Works on IFRAME content now
* Minor Changes
* Code Refactor

= 1.7.2 =
* Bug Fixes
* Bug Fix: Showing HTML output in gravity forms custom post type page.
* Code Refactor

= 1.7.1 =
* Fixed a minor bug when saving settings in WP multisite network admin page.
* Inactive setting menu hides when override option is checked for WP multisite network.

= 1.7.0 =
* Major Bug Fixes
* Added Full Support for Multisite: Users can override one setting for all sites
* Added Finnish Translation. Thanks to daniel
* Changed Translation text domain

= 1.6.3 =
* Changes: Code Optimization
* Major Bug Fixes
* Locale Update

= 1.6.1 =
* Fixed: Activation Error Feeds

= 1.6.0 =
* Added "Disable Concurrent Logins For Certain Roles" in advanced management settings.
* Bug Fix: Major fix that happened to update unselected user roles when trying to check a box.
* Bug Fix: Custom URL redirect fields showing UI
* 3 Major bug fixes
* 5 Minor bug fixes

= 1.5.1 =
* Minor Changes.

= 1.5.0 =
* Added External Page Redirect. Select from "Redirect Page" and choose option "External Page redirect". Available only for Basic settings.
* Major Bug Fixes

= 1.4.7 =
* WordPress 4.8 compatible

= 1.4.4 - 1.4.5 =
* Removed Functionality: Removed auto logout added in v1.4.1 - 1.4.3 due to logout bug.
* Minor Bug Fixes

= 1.4.3 =
* Bug Fix: Fixed logout caused when plugin is activated.

= 1.4.2 =
* Bug Fix: Fixed logout when plugin is deactivated.

= 1.4.1 =
* Added: Logout session even after the browser is closed.

= 1.4.0 =
* Change: Added constant login functionality for all browser tabs which means even if the user has multiple browser tabs opened. Until the user is active plugin will not show any popups or logout the user. The timeout will only show in the last active tab window.

= 1.3.5 =
* Updated: Updated Sweedish translation.
* Change: Small fix regarding php version compatibility.
* Removed: Beta Version for advanced management

= 1.3.4 =
* Security: Fixed a non-security though a security issue. Where a variable named system is changed because virustotal was showing it was a threat.

= 1.3.3 =
* Updated: Spanish translation. Compatible to version 1.3. Thanx to Miguel Arroyo.

= 1.3.2 =
* Updated: German translation. Compatible to version 1.3 Thanks to Roland Dietz

= 1.3.1 =
* Updated: Swedish translation. Compatible to version 1.3 Thanks to @nijen

= 1.3.0 =
* Added: Basic and Advanced configuration features
* Minor Bug Fixes
* Added: Multi Role based configuration
* Added: Multi Role based redirection
* Added: Multi Role based feature disable
* Added: Multi Role based timeout limit
* Added: Tab Layout for settings section

= 1.2.1 =
* Changes: Classes changes in order to avoid any conflict with JS issues.
* Added: Spanish translation. Thanx to Miguel Arroyo.
* Updated: Swedish translation. Thanx to Björn Granberg.
* Minor bug fixes.

= 1.2.0 =
* Feature: Added Redirection to different page after logout functionality.
* Bug: Minor bug fixes.

= 1.1.3 =
* Bug: Activation Bug Fix

= 1.1.2 =
* Corrected Swedish Translation. Thanks to @nijen

= 1.1.1 =
* Corrected German Translation. Thanx to Roland Dietz.
* Corrected Localization String in Helper Class.

= 1.1.0 =
* Added Concurrent Login Functionality referencing from prevent concurrent logins by Frankie Jarrett
* Fixed Translation Errors
* Added Swedish Translation thanks to @nijen
* Added Popup Solid Background Feature
* Few Bug Fixes

= 1.0 =
* Initial Release

== Upgrade Notice ==

= 1.7.7 =
Upgrade to get latest stable version.
= 1.7.2 =
Upgrade to get latest stable version.
= 1.7.1 =
Upgrade to get latest stable version.
= 1.7.0 =
Upgrade to get latest stable version.
= 1.6.1 - 1.6.2 =
* Fixed activation error, upgrade to get latest stable version.
= 1.6.0 =
* Major improvements and fix updates, upgrade to get latest stable version.
= 1.5.0 =
* Major improvements and fix updates, verify change log for upgrade.
= 1.4.5 =
Please read FAQ section for old users.
= 1.4.3 =
Please read FAQ section for old users.
= 1.4.0 =
Please upgrade to get new feature.
= 1.3.0 =
Please upgrade to get latest features.
= 1.2.0 =
Added Redirect to Custom Page functionality.
= 1.1.3 =
Crucial Upgrade. Contains fix for activation Error. Please upgrade.