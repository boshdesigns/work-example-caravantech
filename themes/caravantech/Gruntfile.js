module.exports = function(grunt) {
  var path = require('path');

  require('load-grunt-config')(grunt, {
    configPath: path.join(process.cwd(), '../../../all/themes/fmgautobase/grunt/config'),
    jitGrunt: {
      customTasksDir: '../../../all/themes/fmgautobase/grunt/tasks'
    },
    data: {
      theme_name: 'caravantech',
      css_file_name: 'app.css',
      scss_file_name: 'app.scss',
      js_file_name: 'app.min.js',
      foundation_theme_path: '../../../all/themes/zurb_foundation',
      foundation_js: [
        '<%= foundation_theme_path %>/js/foundation/foundation.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.abide.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.accordion.js',
        '<%= foundation_theme_path %>/js/foundation/foundation.alert.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.clearing.js',
        '<%= foundation_theme_path %>/js/foundation/foundation.dropdown.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.equalizer.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.interchange.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.joyride.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.magellan.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.offcanvas.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.orbit.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.reveal.js',
        // '<%= foundation_theme_path %>/js/foundation/foundation.slider.js',
        '<%= foundation_theme_path %>/js/foundation/foundation.tab.js',
        '<%= foundation_theme_path %>/js/foundation/foundation.tooltip.js',
        '<%= foundation_theme_path %>/js/foundation/foundation.topbar.js'
      ],
      bourbon: require('node-bourbon').includePaths
    }
  });

};
