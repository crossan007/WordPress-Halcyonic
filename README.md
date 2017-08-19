# Halcyonic WordPress Theme
 
 This is a derivitive of [HTML5 UP](https://html5up.net/)'s [Halcyonic template](https://html5up.net/halcyonic) adpated specifically for WordPress.

 All regions of the landing page are customizable from within the WordPress admin panel:
 * Site Title
 * Site Tagline
 * Top Navigation
 * "Click Me" Button
 * Feature Boxes
 * Below-the-crease informational panels
 * Important Links
 * Footer Text Blurb

 ## Installation

 To install:
 1. Download the latest release of this theme
 1. Place the extracted theme folder in your wp-content/themes folder. 
 1. Navigate to your WordPress Admin Panel's theme menu
 1. Activate the theme

 ## Configuration

 * Top navigation is set using the "Top Menu" display location
 * "Click Me" button is set with the "Big Button" display location
 * Featured content is set using the "Featured Post" custom post type on the left admin navigation 


# WPDistillery

WPDistillery is included in this repo as the development enviornment for this theme.  Relevant secionts from WPDistillery's documentation included below:


**Version 2.1.0** (21.06.2017) - fully compatible with Scotch Box 3.0

[wpdistillery.org](https://wpdistillery.org)


### Dependencies
- [ScotchBox](https://box.scotch.io) (using [Vagrant](https://vagrantup.com) & [Virtualbox](https://virtualbox.org))
- [Vagrant Hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater) (`vagrant plugin install vagrant-hostsupdater`)

##### Vagrant commands
* `vagrant up` will start the machine. The first ever `vagrant up` in your project will also install Scotch Box and execute provisioning
* `vagrant provision` will execute provisioning. This is where WPDistillery runs its core function which is installing and configuring WordPress according to `config.yml`. Before that, it will also update WP-CLI and set the upload size to 64MB. Normally `vagrant provision` should not be executed manually but can be used to re-run the WPDistillery setup in case you want to re-install WordPress.
* `vagrant reload` will restart vagrant. This is required for changes made in the Vagrantfile to take effect.
* `vagrant halt` will shut down the running machine.
* More informations can be found at [vagrantup.com](https://vagrantup.com).

### About

* Author: [Flurin Dürst](https://github.com/flurinduerst) - [Twitter](https://twitter.com/flurinduerst)
* Contributors:
  * [@ShaneShipston](https://github.com/ShaneShipston)
  * [@drawcard](https://github.com/drawcard)

### License
WPDistillery is released under the MIT Public License.

Note: The "About" section in `README.md` and the author (`@author`) notice in the file-headers shall not be edited or deleted without permission. For details, please see [License](LICENSE.md).

I’m putting a lot of time into maintaining WPDistillery, so please consider [donating](https://www.paypal.me/FlurinDuerst/10) or [sharing](https://twitter.com/intent/tweet?url=https%3A%2F%2Fwpdistillery.org). Thank you!
