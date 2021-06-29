フォロー数
select u.user_id, count(f.user_id) count from user u left join follow f on u.user_id 
= f.user_id where u.user_id != 1 group by u.user_id;

フォロワー数
select u.user_id, count(f.following_user_id) count from user u left join follow f on 
u.user_id = f.following_user_id where u.user_id != 1 group by u.user_id;

フォロー中
SELECT u.user_id, u.nickname, f.following_user_id FROM user as u left join follow as f 
on u.user_id = f.following_user_id and f.user_id = 1 WHERE u.user_id != 1;

select u.user_id, count(f.user_id) t1.count(f.following_user_id) from user u left join follow f on u.user_id 
= f.user_id left join (select u.user_id, count(f.following_user_id) count from user u left join follow f on 
u.user_id = f.following_user_id where u.user_id != 1 group by u.user_id) 
as t1 on u.user_id = t1.user_id where u.user_id != 1 group by u.user_id;

SELECT u.user_id, u.nickname, f.following_user_id FROM user as u left join follow as f 
on u.user_id = f.following_user_id and f.user_id = 1 
left join (select u.user_id, count(f.user_id) count from user u left join follow f on u.user_id 
= f.user_id left join (select u.user_id, count(f.following_user_id) count from user u left join follow f on 
u.user_id = f.following_user_id where u.user_id != 1 group by u.user_id) 
as t1 on u.user_id = t1.user_id where u.user_id != 1 group by u.user_id) as t2
ON u.user_id = t2.user_id WHERE u.user_id != 1;

SELECT u.user_id, u.nickname, f.following_user_id count(t1.following_user_id) count(t2.user_id) FROM user as u
         left join follow as f on u.user_id = f.following_user_id and f.user_id = 1
         left join (select u.user_id, count(f.following_user_id) count from user u left join follow f on u.user_id = f.following_user_id where u.user_id != 1 group by u.user_id) as t1
         ON u.user_id = t1.user_id
         left join (select u.user_id, count(f.user_id) count from user u left join follow f on u.user_id = f.user_id where u.user_id != 1 group by u.user_id) as t2
         ON u.user_id = t2.user_id WHERE u.user_id != 1
