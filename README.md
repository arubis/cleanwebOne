# Cleanweb ONE #

A shiny new Cleanweb theme based off graphic design work by Mayday Mayday Mayday productions and Twitter Bootstrap 3.

## STYLES PIPELINE ##

It gets down and gets funky and gets a little bit like this:

 * Source files are in _sass, with style.scss as the parent
 * _sass/ie.css, print.css, and screen.css are currently unused
 * Compass (invoked from this directory) reads config.rb, 
   and compiles from _sass/*.scss to css/style.css

## REQUREMENTS ##

You'll need Ruby, Rubygems, and Bundler installed. Whatever versions
were out when this was created (08 Oct 2013) should do the trick.

With those in place, just: 'bundle install'

...and that should set you up with Compass, Sass, autoprefixer, etc.

## USAGE ##

'compass compile' -- one-off compilation of scss -> css  
'compass watch' -- watch all scss files for change, recompile as needed
