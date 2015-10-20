use f33ee;

insert into customers values
  (3, "Julie Smith", "25 Oak Street", "Airport West"),
  (4, "Alan Wong", "1/47 Haines Avenue", "Box Hill"),
  (5, "Michelle Arthur", "357 North Road", "Yarraville");
  
insert into orders values
  (NULL, 3, 69.98, "2007-04-02"),
  (NULL, 1, 49.99, "2007-04-15"),
  (NULL, 2, 74.98, "2007-04-19"),
  (NULL, 3, 24.99, "2007-05-01");
  
insert into products values
(NULL, "Just Java", "Regular house blend - decaf or flavour of the day", 2),
(NULL, "Cafe au Lait - Single", "House blended coffee infused into a smooth steamed milk", 2),
(NULL, "Cafe au Lait - Double", "House blended coffee infused into a smooth steamed milk", 3),
(NULL, "Iced Cappucino - Single", "Sweetened expresso blended with milk and served cold.", 4.75),
(NULL, "Iced Cappucino - Double", "Sweetened expresso blended with milk and served cold.", 5.75);

insert into order_items values
(1, 1, 2),
(2, 2, 1),
(3, 3, 1),
(3, 1, 1),
(4, 2, 3);
