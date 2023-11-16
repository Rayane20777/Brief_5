ALTER TABLE comptes
ADD FOREIGN KEY (id_client) REFERENCES clients (id);   


ALTER TABLE transactions
ADD FOREIGN KEY (id_compte) REFERENCES comptes (id);    