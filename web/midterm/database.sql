CREATE DATABASE portal;

CREATE TABLE users (                                -- This is for creating users to give access to portal.
    id SERIAL PRIMARY KEY NOT NULL,                 -- This is obvious.
    username VARCHAR(20) UNIQUE NOT NULL,           -- Used for login.
    type VARCHAR(50) NOT NULL,                      /* In case we want to add in admin rights later on, 
                                                       adding this is now will make it easier for us to
                                                       implement later. */
    pass VARCHAR(255) NOT NULL,                     -- Hopefully obvious.
    fname VARCHAR(50) NOT NULL,                     -- First name for login greating.
    lname VARCHAR(50) NOT NULL                      -- Last name because why not?
)

CREATE TABLE preferences (                          -- This is where we save bookmarks and all the good stuff
    id SERIAL PRIMARY KEY NOT NULL,                 -- Never know when we will need it.
    user_id INT NOT NULL REFERENCES users(id),      -- So we can grab the right preferences.
    bmarks VARCHAR(255) NOT NULL                    -- Our bookmarks
)