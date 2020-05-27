rsync -a --exclude='.git/' -v ~/c/ ~/Dropbox/Public/c
rsync -a -v subdir/ ./

rsync -a --exclude='.git/' --exclude='node_modules/' -v ./saferkidsph/  /var/www/saferkidsph.stormwild.net/html/wp-content/themes/saferkidsph/
