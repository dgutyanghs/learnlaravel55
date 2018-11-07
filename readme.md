
# Table of Contents

1.  [Lavarel 笔记](#orgc7ab2c5)
    1.  [homestead 环境下创建数据库](#org593c1a4)


<a id="orgc7ab2c5"></a>

# Lavarel 笔记


<a id="org593c1a4"></a>

## homestead 环境下创建数据库

    // SSH into the box
    vagrant ssh
    
    // Connect to MySQL as the homestead user (password is: secret)
    mysql -u homestead -p
    
    // Create a new database in MySQL
    CREATE DATABASE your_app_name;
    
    // Leave MySQL
    exit;

