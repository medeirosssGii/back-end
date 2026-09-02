<?php

 echo "Pizza Palace Menu";
 echo "1- Pizza, 2- Hamburger, 3- Soda, 4- Dessert, 5- Exit";
  
 switch ($opcao=5){
    
    case 1:
        echo "Pizza";
        break;
    case 2:
        echo "Hamburger";
        break;
    case 3:
        echo "Soda";
        break;
    case 4:
        echo "Dessert";
        break;
    case 5:
        echo "Exit";
        break;
    default:
        echo "Invalid option!";
 }

 ?>