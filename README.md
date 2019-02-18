# moodle-activity_vuetest
Moodle activity skeleton integrating Vue.js for view.php

# Segmentation
For now there is now automatic deployment set up. The code consists of two parts:
1. The vue.js app, which needs to be compiled with `npm run build` within the app dir.
2. The moodle activity plugin.

# Set up
In order to install the plugin on a moodle hosting, you need to run `npm run build` within the app dir and the copy the folders `app/dist/css` and `app/dist/js` into `assets/`. After that you need to check the file names in `view.php`. Most likely, app.js will have another name (changed chunk id).

# Thins to know
1. The vue.js app is wrapper with a web-component-wrapper, so that it can be integrated into an existing website just like a widget.
2. The vue router uses abstract mode because we don't want to actually change urls in the browser.
