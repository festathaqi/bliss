//created_at: DATETIME ose TIMESTAMP 
shka o ? 



CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT NOT NULL,
    image_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
 // mi bo qito te add_product.php



// kur ta preki sign up as an admin me mu lidh direkt me dashboard pe du 

//kkur ta boj log out pi adminit me mdal pi faqes

//kur ta klikoj signup me mu qel vet e jo me pas nevoj mi bo aty .php
 
//ete validim te te dhenave ne front end dhe backend si dhe
 kodi ne PHP te jete i shkruar bazuar ne Objekte: Object Oriented PHP