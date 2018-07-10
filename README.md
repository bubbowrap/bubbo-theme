# bubbo-theme
=====================
Bubbowrap 2018 theme, build with Wordpress/Twig/ACF.

## Tech Stack

Built with [wordpress](https://wordpress.org/)

[npm](https://docs.npmjs.com/cli/install)
[Gulp](https://github.com/gulpjs/gulp/blob/master/docs/API.md)


## Cmds

### NPM
 - `npm install` Install global assets/packages.

 - `npm update` Update & Install latest global assets/packages.

 - `npm cache clean` Update & Install latest global assets/packages.

### Gulp

##### Sass

 - `gulp sass` Force compile sass files 

 - `gulp watch` Monitor scss directory for changes and auto-compile

 - `gulp` alias for `gulp watch` 


##### Optimization

 - `gulp minify-css` minify css files

 - `gulp minify-js` concat & minify js files

 - `gulp images` compress site images

 - `gulp optimize` Runs all of the following commands: *images, minify-css, minify-js*


#### Basic Git Commands 

 - `git fetch --all` Sync local branches with origin

 - `git pull origin branch_name` Pull updates from origin to local branch 

 - `git add path/to/file` Add new file to git for versioning

 - `git checkout -- path/to/file` erase local changes to file and reset back to whats on master

 - `git reset --hard origin/master` I messed up and want to wipe out everything I changed 

 - `git status` See what files have been changed and staged for commit

 - `git diff /path/to/file` See whats different between local changed file and origin

 - `git commit -m` commit changes with a message explaining the changes

 - `git push origin branch_name` once commited push your feature branch to origin 
