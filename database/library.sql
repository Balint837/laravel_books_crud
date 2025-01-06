BEGIN TRANSACTION;

DROP TABLE IF EXISTS "books";
CREATE TABLE "books" (
	"id"	INTEGER,
	"title"	TEXT NOT NULL,
	"author"	TEXT NOT NULL,
	"publishedDate"	TEXT NOT NULL CHECK (publishedDate LIKE '____-__-__%'),
	"rating"	REAL NOT NULL CHECK (rating >= 0),
	"genre"	TEXT NOT NULL,
	"created_at"	TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	"updated_at"	TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY("id" AUTOINCREMENT)
);

DROP TABLE IF EXISTS "categories";

INSERT INTO "books" ("title", "author", "publishedDate", "rating", "genre") VALUES
('The Midnight Library', 'Matt Haig', '2020-08-13', 4.5, 'Fantasy'),
('Where the Crawdads Sing', 'Delia Owens', '2018-08-14', 4.8, 'Mystery'),
('Becoming', 'Michelle Obama', '2018-11-13', 4.9, 'Biography'),
('The Silent Patient', 'Alex Michaelides', '2019-02-05', 4.1, 'Thriller'),
('Educated', 'Tara Westover', '2018-02-20', 4.7, 'Memoir'),
('The Great Gatsby', 'F. Scott Fitzgerald', '1925-04-10', 4.3, 'Classic Literature'),
('Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', '2011-01-01', 4.6, 'History'),
('1984', 'George Orwell', '1949-06-08', 4.7, 'Science Fiction'),
('The Catcher in the Rye', 'J.D. Salinger', '1951-07-16', 4.0, 'Young Adult (YA)'),
('To Kill a Mockingbird', 'Harper Lee', '1960-07-11', 4.8, 'Historical Fiction');

COMMIT;