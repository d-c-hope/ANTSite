serverHost=192.168.1.13


rsync -rptvz --delete --exclude '.git' -e ssh  . cchsite@$serverHost:antSiteWww





