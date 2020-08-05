=== Splitit Installment Payments Enabler ===
Contributors: splitit, sixg
Tags: ecommerce, e-commerce, commerce, wordpress ecommerce, sales, sell, shop, shopping, checkout, payment, splitit
Requires at least: 3.0.1
Tested up to: 5.4.2
Stable tag: 2.4.6
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Enables offering shoppers monthly payments on their existing Visa and Master Card credit cards in WooCommerce - Level 1 PCI DSS compliant

== Description ==

Splitit – Interest-Free Monthly Payments plugin for WooCommerce<br>
Start offering your customers **interest-free installment payments** on their existing credit cards today!<br>
The Splitit  WooCommerce plugin lets your customers pay for your goods and services via interest-free monthly installments on the Visa and Master Card credit cards they already have in their wallets.
No credit checks, applications or new credit cards.
Works as long as your customer has available credit on their card equal to the amount of the purchase.
Interest-free installments appear on their regular credit card statement, under your store name.
Your customers continue to enjoy the benefits of their credit cards such as mileage, cash back, and points with no additional billing cycle to manage.
Interest-free installment payments make great business sense!<br><br>
Ecommerce merchants that offer Splitit to their customers enjoy:<br>
-Increased sales <br>
-Higher average tickets<br>
 -Increased conversion rates <br>
-A better alternative to discounts and promotions<br>
-Stronger brand value<br>
<br>
Some more good stuff to know about the Splitit plugin for WooCommerce:<br>
-Installment transactions are validated and guaranteed by the credit card issuer<br>
-Merchants pay a small processing fee and can choose to receive the payments by installment<br>
Or you can receive the total amount upfront after paying a low discount fee<br>
-We are pre-integrated with all major credit card processors and gateways and are Level 1 PCI DSS compliant.

== Installation ==
1. Requires WooCommerce extension to be installed/updated at least to 2.6.5 version first! 
https://wordpress.org/plugins/woocommerce/
2. Upload `splitit` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Configure Splitit API keys and enable the module in WooCommerce -> Settings -> Checkout -> Splitit (tab) before it appears on the checkout page.

<a href="https://www.splitit.com/merchant-application/" target=_blank>Register for Free to Get Your API Keys</a><br>
<a href="https://www.splitit.com/">Read more about Splitit</a>

== Frequently Asked Questions ==

= When I need to charge customer? =

You need to manually charge customer if you`ve set Payment action option in WooCommerce -> Settings -> Checkout -> Splitit (tab) to "Charge my consumer when the shipment is ready".
If option is set to "Charge my consumer at the time of the purchase" then client will be charged automatically in a time of purchase.

= How to charge customer? =

To charge customer you need to open order edit page and select "[Splitit] Charge customer" action in Order Actions section as shown on screenshot.

== Screenshots ==

1. General settings
2. Cart page
3. Splitit payment method on checkout
4. Splitit payment gateway page
5. Order success page
6. Admin Order page
7. Customer charge action

== Changelog ==

= 2.4.6 =
*Remove zipcode validation on special countries
*Fix compatibility with Paypal For WooCommerce
*Add multicurrency compatability
*Change logos config name

= 2.4.5 =
*change splitit logo

= 2.4.4 =
*change splitit logo
*fixed logo size on order emails
*code refactoring for allowing unit tests
*fix culture name parameter
*Google crawlers fix
*some css improvement
*remove splitit fee feature

= 2.4.3 =
*bug fix for discount being added twice during async call
*added logs for every step
*async call fix

= 2.4.2 =
*bug fix for 2.4.0

= 2.4.1 =
*add css fix for admin order quick view

= 2.4.0 =
*Major vulnerability fix

= 2.3.1 =
*Removed old code which was no longer in use

= 2.3.0 =
*Changed function names to prevent conflict with other plugins
*Added extra checks to prevent XSS and SQL injection attacks
*Removed code and settings which was no longer in use

= 2.2.14 =
*Small bug fixes to support other plugins

= 2.2.13 =
*Updated web-api URLs

= 2.2.12 =
*Added setting to redirect to thank you page instead of default order success page

= 2.2.11 =
*Fixed minor bug with respect to Ireland zipcode.

= 2.2.10 =
*Fixed minor bug with respect to latest woocommerce update.

= 2.2.9 =
*Fixed minor bug crashing the admin product edit page.

= 2.2.8 =
*Added validation for address_field_1.

= 2.2.7 =
*Bug fixes for payment method title and checkout validate and added fix for payment method title in admin.

= 2.2.6 =
*Fix logo issue on checkout page.

= 2.2.5 =
*To set the default installment selected when redirected to SplitIt payment page.

= 2.2.4 =
*Rearranging the admin configuration in sub-blocks, fix the title to be shown on the checkout page, also SplitIt text is fixed.

= 2.2.3 =
*Auto conversion for SplitIt text to SplitIt logo, Settings for Logo and Help link in the admin. 3D secure minimal amount to zero if not filled.

= 2.2.2 =
*check for payment method added for order cancel and refund hooks and added backward compatibility for per product functionality.

= 2.2.1 =
*small check added for logging

= 2.2.0 =
*implemented on demand product fetch for per product functionality and added feature for first payment.

= 2.1.9 =
*added fix for shipping address country when customer billing and shipping address are same

= 2.1.8 =
*added fix for customer account creation on checkout

= 2.1.7 =
*added 3DSecure functionality with minimum amount for 3DSecure enable

= 2.1.6 =
*removed unwanted code

= 2.1.5 =
*different shipping address validation fix, US states validation fix

= 2.1.4 =
*async call setting, splitit_log table order_id field update, remove get request check, state not mandatory, 

= 2.1.3 =
*Updates as per to latest wordpress and woocommerce.

= 2.1.2 =
*Fix for splitIt fees in async operation.

= 2.1.1 =
*Fix for splitIt fees and enable splitit per product,Fixed checkout success return function.

= 2.1.0 =
*Implement splitIt fees and enable splitit per product,Fixed checkout success return function.

= 2.0.9 =
*Fixed coupon,shipping, taxes in Async also handled if fraud cases comes out.

= 2.0.8 =
*Fixed shipping charges in Async URL.

= 2.0.7 =
* Async URL fixed.

= 2.0.6 =
* Validation error fixes.

= 2.0.5 =
* Change redirection after order success.

= 2.0.4 =
* Fixed Plugin collision with other plugins
* Fixed Billing and Shipping address  

= 2.0.3 =
* Images updated


= 2.0.0 =
* Implemented depending on cart total functionality
* Latest Splitit API installation
 
= 0.2.6 =
* Fixed bug when payment wizard popup didn`t load if user cleared Splitit payment method description field in admin. Highly recommended to update up to this version.

= 0.2.5 =
* Reduced number of digits in price displaying to 2 symbols after comma.

= 0.2.4 =
* Fixed terms and conditions field checking.

= 0.2.3 =
* IMPORTANT: Fixed incorrect cookie setting in IE 11 browser.

= 0.2.2 =
* IMPORTANT: Fixed popup wizard not appearing.

= 0.2.1 =
* Improved installment price settings. Code improvements.

= 0.2.0 =
* IMPORTANT: Improved error handling when receive error from API. "-1" response on success page fixed.

= 0.1.9 =
* IMPORTANT: Fixed shipping data missing issue. Checkout process improvements.

= 0.1.8 =
* Fixed price locale.

= 0.1.7 =
* IMPORTANT: fixed error on checkout success action, when "ship to diffetent address" checkbox wasn`t selected.

= 0.1.6 =
* IMPORTANT: checkout fields validation improvements, splitit popup wizard logic improvements.

= 0.1.5 =
* Minor fixes

= 0.1.4 =
* Fixed plugin incorrect behaviour with "Ship to different address" option enabled

= 0.1.3 =
* Added cdn url configuration fields

= 0.1.2 =
* IMPORTANT: splitit payment handler was used by default for all checkout methods. It caused calling Splitit popup wizard even when user selected other than Splitit payment method for checkout. Fixed.

= 0.1.1 =
* Added API response error showing to customer

= 0.1.0 =
* First release
