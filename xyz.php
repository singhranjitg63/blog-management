//create table

CREATE TABLE comments(
    id int PRIMARY KEY AUTO_INCREMENT ,
    user_name varchar(255), email varchar(255), 
    post_id int, comment text , 
    FOREIGN KEY (post_id) REFERENCES posts(id),
    created_at timestamp default CURRENT_TIMESTAMP , 
    updated_at timestamp default CURRENT_TIMESTAMP );