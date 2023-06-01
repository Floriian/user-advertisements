-- Create data for "users" table. We dont need to add 'id', because automatically increments users.id
INSERT INTO appdatabase.users (name) VALUES
	 ('John Doe'),
	 ('Gipsz Jakab'),
	 ('Kiss Béla'),
	 ('Louise Webster'),
	 ('Dion Chyna'),
	 ('Luanna Eliza');

-- Create data for "advertisements" table. UserID based on the previous query.
INSERT INTO appdatabase.advertisements (userid,title) VALUES
	 (1,'Twitter'),
	 (2,'Lorem Ipsum'),
	 (1,'dolor sit amet,'),
	 (3,'consectetur '),
	 (4,'Suspendisse '),
	 (5,'scelerisque at '),
	 (6,'ultricies ut'),
	 (6,'Ut nec pulvina'),
	 (1,'sed eleifend neque.'),
	 (2,'Proin ac turpis ut');
