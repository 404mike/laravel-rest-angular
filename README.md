## Laravel REST and anuglarjs

## Reasons behind this repository 

I wanted a base project where I don't have to set-up vagrant and laravel and angular each time. I also wanted to use laravel as my backend which would act as an API and have a angularjs frontend.

I wanted to version the API, so I've attempted to put the models and controllers in directories similar to ```app/controllers/api/v1```.

I'm not saying that everything so far in this project is correct, but please feel free to contribute.

## Running vagrant

* Clone the repository
* cd to the directory
* run ```vagrant up```
* ssh into the vm and run ```yo angular laravel``` in ```/vagrant/public``` (change the project name from laravel to whatever you want), follow the options on screen.

## Changing ansible parameters

If you want to add or remove the default ansible playbooks from the install you can do so by editing ```playbook.yml``` in the ansible directory.
To change the variables for the playbooks, you can edit them under ```ansible/vars```.
All playbooks are under ```ansible/roles```.

## Laravel create new controllers

To create a new controller run artisan ```php artisan controller:make api/v1/FooController```

## yo angular

To create angular routes and controllers see https://github.com/yeoman/generator-angular

## TODO

* Add more playbooks - solr, elascticsearch
* Fix bugs
* Add user and social login ability
* Improve the REST code 
