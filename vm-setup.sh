#!/bin/bash

main()
{
    read -e -p "First and last name for Git?: " gitname
    read -e -p "Email for Git?: " gitmail

    git config --global user.name "$gitname"
    git config --global user.email "$gitmail"

	local yii="/var/www/yiiframework"
    
    # Get packages
	apt-get update
	apt-get install -y vim vim-common git-flow ruby-dev ruby-full rubygems exuberant-ctags ruby-compass

    # Prepare Yii instance with ADbC source
	rm -rf "$yii/*"
	git clone git@github.com:zyrolasting/adbc-yii.git "$yii"
	cd "$yii"
	mkdir protected/runtime assets ~/procss
	chmod 770 -R .
	chown -R www-data:www-data .

	# Register ProCSS
	git clone git@github.com:zyrolasting/procss.git ~/procss
	. ~/procss/procss-env
	echo ". ~/procss/procss-env" >> ~/.bashrc

    # Configure VIM
    rm /usr/local/bin/vim
    ln -s /usr/bin/vim /usr/local/bin/vim
    git clone git://github.com/amix/vimrc.git ~/.vim_runtime
    sh ~/.vim_runtime/install_awesome_vimrc.sh
}

main $@
