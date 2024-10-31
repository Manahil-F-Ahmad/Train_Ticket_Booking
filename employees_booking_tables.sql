-- Making the Employees Table
CREATE TABLE train_ticket_booking.employees(
    employeeID CHAR(8) PRIMARY KEY NOT NULL,
    e_fname CHAR(20) NOT NULL,
    e_lname CHAR(20) NOT NULL,
    e_email CHAR(20) NOT NULL,
    e_phone INT(10) NOT NULL,
    position CHAR(20) NOT NULL,
    stationID CHAR(8) NOT NULL,
    FOREIGN KEY (stationID) REFERENCES stations(stationID)
);

-- Creating the booking Table
CREATE TABLE train_ticket_booking.booking(
    bookingID CHAR(8) PRIMARY KEY NOT NULL,
    class CHAR(10) NOT NULL,
    seat CHAR(3) NOT NULL,
    trainID CHAR(8) NOT NULL,
    stationID CHAR NOT NULL,
    FOREIGN KEY (trainID) REFERENCES trains(trainID),
    FOREIGN KEY (stationID) REFERENCES stations(stationID)
)