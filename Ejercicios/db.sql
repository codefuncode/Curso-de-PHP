    CREATE DATABASE /*!32312 IF NOT EXISTS*/'ejemplo' /*!40100 DEFAULT CHARACTER SET latin1 */;
    USE 'ejemplo';
    /*Table structure for table 'persona' */
    DROP TABLE IF EXISTS 'persona';
    CREATE TABLE 'persona' (
    'idpersona' int(11) NOT NULL AUTO_INCREMENT,
    'nombre' varchar(200) DEFAULT NULL,
    'apellidos' varchar(200) DEFAULT NULL,
    'sexo' varchar(50) DEFAULT NULL,
    PRIMARY KEY ('idpersona')
    ) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
    /*Data for the table 'persona' */
    insert  into 'persona'('idpersona','nombre','apellidos','sexo') values 
    (1,'Felicia','	Leandra','Femenino'),(2,'Gaspar','Marcelo','Masculino'),
    (3,'Victor','María','Masculino'),
    (4,'Celeste','Martín','Femenino'),
    (5,'Andrea','Martinez','Femenino'),
    (6,'Antonio','Nicolás','Masculino'),
    (7,'Paula','	Renzo','Masculino'),
    (8,'test','test','Masculino');
    
    