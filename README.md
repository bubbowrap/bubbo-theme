# bubbo-theme (2018)

## About
Bubbowrap 2018 theme, built with Wordpress/Twig/ACF. Wanted to build a lightweight theme completely from scratch and also make my site easier to update/reskin in the future.

## Stack

### Built with:

- [wordpress](https://wordpress.org/)
- [npm](https://docs.npmjs.com/cli/install)
- [twig](https://twig.symfony.com)
- [Gulp](https://github.com/gulpjs/gulp/blob/master/docs/API.md)


## Basic Commands

### NPM
 - `npm install` Install global assets/packages.

 - `npm update` Update & Install latest global assets/packages.

 - `npm cache clean` Update & Install latest global assets/packages.

### Gulp

##### Sass

 - `gulp sass` Force compile sass files 

 - `gulp watch` Monitor scss directory for changes and auto-compile


##### Optimization

 - `gulp minify-css` minify css files

 - `gulp minify-js` concat & minify js files

 - `gulp images` compress site images

 - `gulp optimize` Runs all of the following commands: *images, minify-css, minify-js*
