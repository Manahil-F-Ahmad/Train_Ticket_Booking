-- Making the Stations Table
CREATE TABLE train_ticket_booking.stations(
    stationID CHAR(8) NOT NULL,
    trainID CHAR(8)  NOT NULL,
    dates CHAR(8) NOT NULL,
    arrival CHAR(4) NOT NULL,
    stopNumber INT(3) NOT NULL,
    PRIMARY KEY (stationID, trainID)
);