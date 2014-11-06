serverHost=192.168.1.13


rsync -rptvz --delete -e ssh  . cchsite@$serverHost:antSiteWww





