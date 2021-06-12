<?php
echo "
INSERT INTO `users`(`Name`, `Lastname`, `pwd`, `profile`) VALUES ('Ali','Madadi','1234','./image.png')
<br/><br/>
SELECT * FROM `users` WHERE name = 'Ali'
<br/><br/>
SELECT * FROM `users` WHERE Name = 'Ali' && Lastname = 'madadi'
<br/><br/>
UPDATE `users` SET `Name`='[arshia]',`Lastname`='[madadi]',`pwd`='[5454]',`profile`='[../.]' WHERE Name = 'bardia'
<br/><br/>
DELETE FROM `users` WHERE Name = 'Ali' && Lastname = 'madadi'
<br/><br/>
";