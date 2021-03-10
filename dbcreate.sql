CREATE TABLE `products` (
  `Product_ID` int NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(40),
  `Storage_Amount` varchar (10),
  `Service_Provider` varchar (20),
  `Phone_Colour` varchar(20),
  `Camera` BOOLEAN NOT NULL DEFAULT '0',
  `Product_Description` varchar(100),
  `Product_Stock` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`ProductID`)
);