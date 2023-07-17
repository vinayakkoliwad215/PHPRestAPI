https://www.positronx.io/create-simple-php-crud-rest-api-with-mysql-php-pdo/

Navigate to the directory where you have located your PHP project.

cd php-project-name

Once you are in the project folder then run the following command to start the PHP app.

php -S 127.0.0.1:8080

Following output will be displayed on your terminal screen.


https://github.com/vinayakkoliwad215/PHPRestAPI

=================================================================================================
I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi
$ git config --global user.name "vinayakkoliwad"

I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi
$ git config --global user.email "vinayakkoliwad42@gmail.com"

I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi
$ git status
fatal: not a git repository (or any of the parent directories): .git

I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi
$ git init
Initialized empty Git repository in C:/xampp/htdocs/RestPHPapi/.git/

I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi (master)
$ git status
On branch master

No commits yet

nothing to commit (create/copy files and use "git add" to track)

I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi (master)
$ git status
On branch master

No commits yet

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        api/
        class/
        config/
        employee.sql

nothing added to commit but untracked files present (use "git add" to track)

I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi (master)
$ git add .
I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi (master)
$ git status
On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)
        new file:   api/create.php
        new file:   api/delete.php
        new file:   api/read.php
        new file:   api/single_read.php
        new file:   api/update.php
        new file:   class/employees.php
        new file:   config/database.php
        new file:   employee.sql


I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi (master)
$ git commit -m "first commit for rest api for php"
[master (root-commit) 272da69] first commit for rest api for php
 8 files changed, 316 insertions(+)
 create mode 100644 api/create.php
 create mode 100644 api/delete.php
 create mode 100644 api/read.php
 create mode 100644 api/single_read.php
 create mode 100644 api/update.php
 create mode 100644 class/employees.php
 create mode 100644 config/database.php
 create mode 100644 employee.sql

I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi (master)
$ git remote add origin https://github.com/vinayakkoliwad215/PHPRestAPI.git

I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi (master)
$ git branch -M main

I T POINT@DESKTOP-IKHP7EN MINGW64 /c/xampp/htdocs/RestPHPapi (main)
$ git push -u origin main
Enumerating objects: 13, done.
Counting objects: 100% (13/13), done.
Delta compression using up to 4 threads
Compressing objects: 100% (11/11), done.
Writing objects: 100% (13/13), 3.90 KiB | 665.00 KiB/s, done.
Total 13 (delta 2), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (2/2), done.
To https://github.com/vinayakkoliwad215/PHPRestAPI.git
 * [new branch]      main -> main
Branch 'main' set up to track remote branch 'main' from 'origin'.
