let mix = require('laravel-mix')
mix
  .setPublicPath('public/ep')
  .sourceMaps()
  .vue()
  .js('resources/js/app.js', 'public/ep/js/ep-orchid-ui.js')
  .css('resources/css/app.css', 'public/ep/css/ep-orchid-ui.css')
