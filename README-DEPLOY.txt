AMIELTECH THEME TOGGLE FIX

Upload the updated PHP pages, style.css, and script.js. Do not replace send-booking.php if you want to retain your current booking handler.

The JavaScript now initializes after the document is ready, binds the theme button click handler, applies the selected theme, and saves the preference when browser storage is available. The CSS and JS filenames have cache-busting query strings so browsers fetch the updated files.

If the toggle still does not work, open the website, press F12, choose Network, enable Disable cache, then refresh. Check that script.js?v=20261015-theme-fix returns status 200. Make sure script.js is in the same directory as the PHP pages (or in the web root if the site uses a root-relative path).
