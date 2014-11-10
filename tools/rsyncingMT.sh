serverUser=$1
serverHost=$2

rsync -rptvz --delete --exclude '.git' -e ssh  . $serverUser@$serverHost:antSiteWww




