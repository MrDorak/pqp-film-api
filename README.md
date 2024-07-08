<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### Setup
https://laravel.com/docs/11.x/installation#docker-installation-using-sail

- duplicate the `.env.example` and rename it `.env` and replace <YOUR_TMDB_API_TOKEN> by the TMDB API Token for the API to work

- `./vendor/bin/sail up -d`

- `./vendor/bin/sail artisan migrate`

- `./vendor/bin/sail npm install`

- `./vendor/bin/sail npm run dev`

### Getting started

1/ fetch and store/update the first page of the trending films of the day :

- `./vendor/bin/sail artisan app:update-film-data`

1bis/ alternatively if the API doesn't work you can run the seeders to generate some fake film data :

- `./vendor/bin/sail artisan db:seed`

2/ access `localhost` and register a new account to gain access to the back-office

3/ navigate to the "Films" tab
