#!/bin/sh

# our variables n'at
export WP_LOCATION='../public_html'
export THEME_NAME='new-hazlett'
export PLUGIN_NAME=''
export THEMES=$WP_LOCATION/wp-content/themes
export PLUGINS=$WP_LOCATION/wp-content/plugins
export UPLOADS=$WP_LOCATION/wp-content/uploads
export THEME_LOCATION=$THEMES/$THEME_NAME
export PLUGIN_LOCATION=$PLUGINS/$PLUGIN_NAME

# make sure the destination directories exist
mkdir -p $THEMES
mkdir -p $PLUGINS
mkdir -p $UPLOADS
#mkdir -p $THEME_LOCATION
mkdir -p $PLUGIN_LOCATION

# copy the content
cp -Rfv .htaccess $WP_LOCATION
cp -Rfv uploads/* $UPLOADS
cp -Rfv plugins/* $PLUGINS
cp -Rfv themes/* $THEMES
#cp -Rfv root/* $WP_LOCATION
#cp -Rfv plugin/* $PLUGIN_LOCATION

## move the changes so we don't overwrite plugin updates on server
#mkdir -p archive
#mkdir -p archive/uploads
#mkdir -p archive/plugins
#mkdir -p archive/themes
#mkdir -p archive/root
##mkdir -p archive/plugin
#
## copy deployment into our local archive
#cp -Rfv .htaccess archive
#cp -Rfv uploads/* archive/uploads
#cp -Rfv plugins/* archive/plugins
#cp -Rfv themes/$THEME_NAME/* archive/themes/$THEME_NAME
#cp -Rfv root/* archive/root
#
## remove all deployed files now that they have been moved and copied
#rm -rf .htaccess
#rm -rf uploads
#rm -rf plugins
#rm -rf themes
#rm -rf root