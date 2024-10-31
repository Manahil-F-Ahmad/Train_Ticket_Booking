-- Making the Members Table
CREATE TABLE train_ticket_booking.members(
    memberID CHAR(8) PRIMARY KEY NOT NULL,
    m_fname CHAR(20) NOT NULL,
    m_lname CHAR(20) NOT NULL,
    m_email CHAR(20) NOT NULL,
    m_phone INT(10) NOT NULL,
    m_type CHAR(20) NOT NULL,
    bookingID CHAR(8),
    paymentID CHAR(8),
    FOREIGN KEY (bookingID) REFERENCES booking(bookingID),
    FOREIGN KEY (paymentID) REFERENCES payment(paymentID)
);

-- Making the Customers Table
CREATE TABLE train_ticket_booking.customers(
    customerID CHAR(8) PRIMARY KEY NOT NULL,
    c_fname CHAR(20) NOT NULL,
    c_lname CHAR(20) NOT NULL,
    c_email CHAR(20) NOT NULL,
    c_phone INT(10) NOT NULL,
    bookingID CHAR(8),
    paymentID CHAR(8),
    FOREIGN KEY (bookingID) REFERENCES booking(bookingID),
    FOREIGN KEY (paymentID) REFERENCES payment(paymentID)
);