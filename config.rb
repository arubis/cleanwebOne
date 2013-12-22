# Require any additional compass plugins here.
require 'autoprefixer-rails'
# require 'csso'

on_stylesheet_saved do |file|
  css = File.read(file)
  File.open(file, 'w') do |io|
    # io << Csso.optimize( AutoprefixerRails.compile(css) )  # enable this on production 
    io << AutoprefixerRails.process(css)
  end
end

require 'sass-css-importer'
# add_import_path Sass::CssImporter::Importer.new("./bower_components/")

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "/"
sass_dir = "_sass"
sass_options = {:cache => false}

images_dir = "img"
javascripts_dir = "js"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
# output_style = :compressed
output_style = :expanded  # change this on production, of course

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true
