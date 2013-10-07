# Cleanweb ONE #

A shiny new Cleanweb theme based off graphic design work by Mayday Mayday Mayday productions and Twitter Bootstrap 3.

Styles generation:
Styles written originally in Sass (http://sass-lang.org), in the newer
(SCSS) syntax. The main file is styles.scss; this file @imports the 
partial _*.scss files.

For browser compatibility, take Sass's output CSS and run it through
the Can I Use Autoprefixer (https://github.com/ai/autoprefixer). This
step is NOT OPTIONAL -- some sections use the new flexbox properties
from CSS3 and some mainstream browsers (including Safari) need
prefixes in place to recognize these properly.