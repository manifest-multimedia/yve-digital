set -e 

echo "Starting Application Deployment ..."

#Turn on Maintenance Mode
(php artisan down --message "We are currently performing a quick update. 
Please try again in a few moments.")

#Run Update

git pull origin master 

#Turn off Maintenance Mode 

php artisan up 

echo "Application Update Completed Successfully!"

