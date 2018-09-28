================Question 5====================
a.	Logs into a database with respective columns
b.	Logs the data in a log file while reading
c.	Checks for duplicates
d.	Extracts performance metrics e.g TAT
e.	REST API to access the data
===================================================
===== HOW TO SETUP ================================
1. Make sure you have Xampp server setup.
2. Start apache services and mysql in the xampp Control panel.
3. Navigate to php myadmin
4. create a database and call it cellulant
5. Create a table and name it assesment
6. add for fields id =>(Primary_Key, int,Not Null, Auto_increment),time_details=>(varchar(120), not null),request_ip=>(varchar(120), not null),TAT=>(varchar(120), not null)
7. add the log.txt file on the root folder of the web page
8. Open the fileconsumer.php file on the web browser.
9. check the table created in step 5 above, it will be filled with the data from log file.
10. another file log2.txt will be created on the root folder.
11. contains two api files read.php for sending a get request and receiving feedback from server nd post.php for writing data to our db
