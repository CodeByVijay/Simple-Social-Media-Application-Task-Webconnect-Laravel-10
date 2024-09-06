
# Social Media Application

Follow process successfully run this project.


## Demo

Link for demo

https://social.devvijay.online
## Environment Variables

To run this project, you will need to add the following environment variables to your .env file & email configuration is required.

`APP_URL=http://localhost:8000`



## Deployment

To deploy this project copy `.env.example` file & rename `.env` then run following commands

Put `APP_URL` on .env file :
`APP_URL=http://localhost:8000`

```bash
 1. php artisan key:generate
 2. composer Update
 3. php artisan storage:link
 4. php artisan optimize:clear
 5. php artisan serve
```
Enjoy your project successfully run.

## Running Tests

To run tests, run the following command

```bash
  php artisan serve
```


## Features

- User Registration
- User Account Verification using mail
- Forgot & Reset Password using mail
- Published your post.
- Like post
- Follow User
- List of followings
- List of followers
- Secure login & logout


## Authors

- [@CodeByVijay](https://github.com/CodeByVijay)

