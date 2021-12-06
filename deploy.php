<?php
namespace Deployer;

require 'recipe/laravel.php';
use Deployer\Utility\Httpie;


set('ssh_type', 'native'); 
set('ssh_multiplexing', false); 

// Project name
set('application', 'YVE');

// Project repository
// set('repository', 'git@github.com:manifest-multimedia/yve-digital.git');
set('repository', 'https://github.com/manifest-multimedia/yve-digital.git');
// [Optional] Allocate tty for git clone. Default value is false.
//set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('194.135.82.202')
    ->user('yvedigital')
    //->identityFile('id_rsa', 'id_rsa.pub')
    ->set('deploy_path', '/var/www/yvedigital.com/app');
    
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && npm run build');
});


task('notify', function(){
    
// SEND SMS
$destination="233549539417"; 
$message="Application Successfully Deployed for YVE Digital"; 
$response= SMSnotify($destination, $message); 
write('Sending SMS Notification');


// print_r($response);

}); 

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

after('success', 'notify');
