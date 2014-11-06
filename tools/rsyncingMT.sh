serverUser=$1
serverHost=$2

rsync -rptvz --delete -e ssh  . $serverUser@$serverHost:antSiteWww




