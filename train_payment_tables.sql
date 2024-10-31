-- Making the Train Table in the Database

CREATE TABLE train_ticket_booking.trains(
    trainID CHAR(8) PRIMARY KEY NOT NULL,
    tickets_available INT(4) NOT NULL,
    stops INT(3) NOT NULL
);


-- Making the Payment Table in the Database

CREATE TABLE train_ticket_booking.payment(
    paymentID CHAR(8) PRIMARY KEY NOT NULL,
    amount FLOAT(10) NOT NULL,
    tickets INT(5) NOT NULL,
    discount FLOAT(10) NOT NULL
);

