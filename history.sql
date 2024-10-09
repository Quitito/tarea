/* 2024-10-07 11:06:48 [11 ms] */ 
CREATE TABLE table_name(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    create_time DATETIME COMMENT 'Create Time',
    password VARCHAR(255)
) COMMENT '';
/* 2024-10-07 11:57:47 [6 ms] */ 
ALTER TABLE usuarios
ADD COLUMN id INT;
/* 2024-10-07 12:07:12 [7 ms] */ 
ALTER TABLE usuarios
ADD COLUMN username VARCHAR(50);
/* 2024-10-07 12:22:32 [9 ms] */ 
CREATE TABLE passwords (
  id INT NOT NULL,
  password VARCHAR(255));
/* 2024-10-07 12:37:34 [14 ms] */ 
ALTER TABLE usuarios
ADD CONSTRAINT	pk_usuarios PRIMARY KEY (id);
/* 2024-10-07 12:48:01 [26 ms] */ 
ALTER TABLE passwords
ADD CONSTRAINT pk_passwords FOREIGN KEY (id)
REFERENCES usuarios (id);
/* 2024-10-07 15:29:29 [6 ms] */ 
ALTER TABLE pacientes
add COLUMN edad VARCHAR(10);
/* 2024-10-07 15:35:00 [6 ms] */ 
ALTER TABLE pacientes
ADD COLUMN sexo VARCHAR(50);
/* 2024-10-07 15:35:31 [7 ms] */ 
ALTER TABLE pacientes
ADD COLUMN medicamento VARCHAR(50);
/* 2024-10-08 11:01:40 [13 ms] */ 
ALTER TABLE pacientes 
    ADD COLUMN apellidos VARCHAR(100) NOT NULL;
