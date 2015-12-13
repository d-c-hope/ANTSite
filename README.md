ANTSite
=======

At Nursery Today Website

This repo contains the code for the At Nursery today Website. 

Feel free to look at this for ideas but the content is copyright Craft Code House so you must contact me at info.craftcodehouse.co.uk if you wish to use the content of the web pages or copy the whole site styling. The Javascript and any html/css associated with the menu are free to use

To move these files to a webserver you can use either the hard coded rsyncing.sh (which i use on my local test server when developing) or rsyncingMT.sh which I use when pushing to places like media temple. These assume that all files go into a directory in home called antSiteWww

You would run like 
	./rsyncingMT.sh <username> <hostname>
assuming the script had been copied to the top level. Otherwise as ./tools/rsyncingMT <username> <hostname>

On the server you can use one of two scripts to copy into the appropriate place. CopyToWWW.sh just deletes /var/www and then copies in the contents of antSiteWww.

mTcopyToInfoANT.sh is specific to my MediaTemple setup where content goes in a more specific place.

Both these scripts should be run from home, i.e. one level above antSiteWww or it won't find the files (or for MT the domains folder). At some point I should look at having rsync sync directly to the www folders.
