# Cleanweb ONE #

A shiny new Cleanweb theme based off graphic design work by Mayday Mayday Mayday productions and Twitter Bootstrap 3.

## STYLES PIPELINE ##

It gets down and gets funky and gets a little bit like this:

 * Source files are in _sass, with style.scss as the parent
 * _sass/ie.css, print.css, and screen.css are currently unused
 * Compass (invoked from this directory) reads config.rb, 
   and compiles from _sass/*.scss to css/style.css

## STATIC CONTENT ##

A lot of the intended static pages (linked from header/footer) have
their content available in _haml. At the moment there isn't an
automated way to import the content into Wordpress -- you have to 
convert from Haml to HTML and then dump the contents into the WP
page editor, as follows:


  * Install the ["Raw HTML" plugin][].  
  * Use the WP control panel to add a new page with the same base name as the Haml source.  
  * Use the Haml gem to convert each Haml source to HTML.  

My quick and dirty version:

```bash
    [cleanwebOne/_haml]
    for each in *.haml
      do haml $each > $each.html
    done
```
  * In each WP Page editor, use the 'text' tab (not 'visual') and tick the Raw
    HTML options for "Disable automatic paragraphs" and "Disable convert_chars".
  * Dump the contents of each generated HTML file into its corresponding WP Page. 
  * Get a beer!

## REQUREMENTS ##

You'll need Ruby, Rubygems, and Bundler installed. Whatever versions
were out when this was created (07 Feb 2014) should do the trick.

With those in place, just: 'bundle install'

...and that should set you up with Compass, Sass, autoprefixer, etc.

## USAGE ##

'compass compile' -- one-off compilation of scss -> css  
'compass watch' -- watch all scss files for change, recompile as needed
'compass compile -e production' -- compile scss -> css and compress it for production

["Raw HTML" plugin]: http://wordpress.org/plugins/raw-html/