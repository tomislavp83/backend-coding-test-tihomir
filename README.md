We would like you to create a CRUD form to manage casinos� data and their FAQs. This repository is pre-installed with Laravel, Vue and Tailwind. Inside the repo there is also a basic database schema design.

Setup:

- Serve your Laravel application in your prefered way (we use a mix of Valet and Homestead currently)
- Copy the `.env.example` to `.env` and make sure your create a database locally and update the `.env` database variables
- Run `php artisan migrate:fresh --seed` to populate your database with dummy data

What we would like to see:

- We've supplied designs below to demonstrate how this should roughly look. The designs do not need to be the exact same - we've used Tailwind UI but feel free to be creative if you wish.
- The casino form (create + edit) should be built using a single Vue component and use Tailwind CSS for styling.
- There should be an index page (use the home page) that has a table which shows the casino ID, name and amount of FAQs (no need for pagination or async loading of data). Clicking the casino name should take you to the casino's edit page and there should be a button to create a new casino.
- There should be a create page where you can enter the casino name and add multiple FAQs
- There should be an edit page where you can change the casino name, add/update/delete FAQs and also delete the casino (and its FAQs)
- When you create or update the casino form it should redirect you back to the index page
- Inputs are validated e.g casino name should be unique
- Add feature tests for the casino controller
- Please use your own branch and document your steps via commits
- Provide your solution as a pull request

Your database schema should look as follows:

![Database Schema image](https://imgur.com/wB1FahL.png)

Please click the image below to see a video of the final example:

[![Thumbnail](https://imgur.com/2NMqQLo.png)](https://youtu.be/Wskb3ojL6yM  "Backend Coding Test Final Product")
