create table abbreviation(
	abbr_id int not null auto_increment primary key,
    user_id int,
    short_form varchar(50),
    long_form varchar(300),
    desctiption varchar(200),
    foreign key(user_id) references users(user_id)
)