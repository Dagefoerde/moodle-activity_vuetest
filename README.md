# moodle-activity_vuetest
Moodle activity skeleton integrating Vue.js for view.php

# Segmentation
For now there is now automatic deployment set up. The code consists of two parts:
1. The vue.js app, which needs to be compiled with `npm run build` within the app dir.
2. The moodle activity plugin.

# Set up
In order to install the plugin on a moodle hosting, you need to run `npm run build` within the app dir and the copy the folders `app/dist/css` and `app/dist/js` into `assets/`. After that you need to check the file names in `view.php`. Most likely, app.js will have another name (changed chunk id).

# Things to know
1. The vue.js app is wrapper with a web-component-wrapper, so that it can be integrated into an existing website just like a widget.
2. The vue router uses abstract mode because we don't want to actually change urls in the browser.

## License

2019 Benedikt Kulmann <b@kulmann.biz>

This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <http://www.gnu.org/licenses/>.
