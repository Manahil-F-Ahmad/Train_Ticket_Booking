INSERT INTO train_ticket_booking.trains(trainID, tickets_available, stops)
VALUES("LE01",60,10),
("LE02",100,5),
("BP01",230,12),
("BP03",90,9),
("LB01",200,30),
("NE01",120,24);


INSERT INTO train_ticket_booking.stations(stationID, trainID, arrival, stopNumber)
VALUES("M01","LE01","18/05/24","00:00",1),
("M01","LE02","18/05/24", "1:00",2),
("BL01","LE01","20/05/24","2:00",1),
("BL01","BP03","22/05/24","12:10",2),
("BL01","BP01","29/05/24","13:00",3),
("COV01","LB01","01/06/24","23:19",1);