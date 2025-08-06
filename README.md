# HTML5 Wordpress theme

## Overview

I developed this Wordpress theme in a tutorial to show how to use HTML5 markup
in Wordpress. The (German) tutorial can be found at:

http://sebstein.hpfsc.de/2013/01/15/html5-experiment-entwicklung-eines-wordpress-themes/

## How to install this Wordpress theme

If you want to test this Wordpress theme on your own, proceed as follows:

- download this git repository as a zip or clone it
- create a folder called html5tutorial and copy all files to it
- remove the .git folder
- remove the styles_org.css file
- remove the README.md file
- copy the folder to your Wordpress installation under wp-content/themes
- in Wordpress admin interface, activate this theme under Design/Themes

## Minify CSS

Source CSS file is stored in [style_org.css](style_org.css). The
tool [clean-css-cli](https://github.com/clean-css/clean-css-cli) is used to minify it. You need Node.js to
use it.

Install `clean-css-cli` using npm:

    npm install -g clean-css-cli

To minify `style_org.css`, run:

    cleancss -o styles.css -O2 styles_org.css

## Contact & Feedback

I'm very much interested in feedback. Please feel free to clone this repo and create a pull request. You can also
contact me directly via:

- Email - seb-DOT-kde-AT-hpfsc.de
- Web - [sebstein.hpfsc.de](http://sebstein.hpfsc.de/)
- Twitter - [@stein2](https://twitter.com/stein2)

## License

GPL2 (http://www.gnu.org/licenses/gpl-2.0.html)
