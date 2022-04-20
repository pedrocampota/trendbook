INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Peter Parker', 'admin@trendbook.com', NULL, '$2y$10$8n9x/oxRYKOKktoog6V9/..t6TLv3GCQnG39SLCTHW/MCD7aTklX.', NULL, '2022-04-13 16:46:09', '2022-04-13 16:46:09');

INSERT INTO `books` (`id`, `user_id`, `slug`, `title`, `price`, `thumbnail`, `created_at`, `updated_at`, `published_at`) VALUES
(11, 1, 'global-catastrophes-and-trends', 'Global Catastrophes and Trends', '58.90', 'https://mitpress.mit.edu/sites/default/files/styles/large_book_cover/http/mitp-content-server.mit.edu%3A18180/books/covers/cover/%3Fcollid%3Dbooks_covers_0%26isbn%3D9780262195867%26type%3D.jpg?itok=xASKH1QS', '2022-04-18 14:55:09', '2022-04-18 14:55:09', '2022-04-18 14:55:09'),
(10, 1, 'big-history-from-the-big-bang-to-the-present', 'Big History: From the Big Bang to the Present', '16.25', 'https://images-na.ssl-images-amazon.com/images/I/51QgwSJwc9L._SX319_BO1,204,203,200_.jpg', '2022-04-18 14:55:09', '2022-04-18 14:55:09', '2022-04-18 14:55:09'),
(9, 1, 'sustainable-energy-without-the-hot-air', 'Sustainable Energy: without the hot air', '34.50', 'https://images-na.ssl-images-amazon.com/images/I/61No89zg8eL.jpg', '2022-04-18 14:55:09', '2022-04-18 14:55:09', '2022-04-18 14:55:09'),
(8, 1, 'work-hard-be-nice', 'Work Hard. Be Nice', '21.10', 'https://images-na.ssl-images-amazon.com/images/I/81s4wVkmmlL.jpg', '2022-04-18 14:47:51', '2022-04-18 14:47:51', '2022-04-18 14:47:51'),
(7, 1, 'super-freakonomics', 'SuperFreakonomics', '49.19', 'https://rnod.bnportugal.gov.pt/ImagesBN/winlibimg.aspx?skey=&doc=1790998&img=1966&save=true', '2022-04-18 14:47:51', '2022-04-18 14:47:51', '2022-04-18 14:47:51'),
(6, 1, 'life-is-what-you-make-it', 'Life is What You Make It', '19.90', 'https://kbimages1-a.akamaihd.net/05efcce0-34b3-4c5c-ad9c-d7a3320ecc33/1200/1200/False/life-is-what-you-make-it-1.jpg', '2022-04-18 14:47:51', '2022-04-18 14:47:51', '2022-04-18 14:47:51'),
(5, 1, 'klara-and-the-sun', 'Klara and the Sun', '29.90', 'https://images-na.ssl-images-amazon.com/images/I/711cXHTd3+L.jpg', '2022-04-18 14:47:51', '2022-04-18 14:47:51', '2022-04-18 14:47:51'),
(4, 1, 'hamnet', 'Hamnet', '32.25', 'https://kbimages1-a.akamaihd.net/300241ee-890f-4970-b8f6-cb4c0072fb4d/1200/1200/False/hamnet-1.jpg', '2022-04-18 14:46:49', '2022-04-18 14:46:49', '2022-04-18 14:46:49'),
(3, 1, 'project-hail-mary', 'Project Hail Mary', '14.15', 'https://img.bertrand.pt/images/project-hail-mary-andy-weir/NDV8MjQzMTY1NTV8MjA0MDI1MTR8MTYxOTUxNjIxODAwMA==/500x', '2022-04-18 14:45:23', '2022-04-18 14:45:23', '2022-04-18 14:45:23'),
(2, 1, 'the-code-breacker', 'The Code Breaker: Jennifer Doudna, Gene Editing, and the Future of the Human Race', '18.90', 'https://m.media-amazon.com/images/I/41sdqD62cSL.jpg', '2022-04-13 18:02:37', '2022-04-13 18:02:37', '2022-04-13 18:02:37'),
(1, 1, 'a-thousand-brains', 'A Thousand Brains: A New Theory of Intelligence', '22.95', 'https://images-na.ssl-images-amazon.com/images/I/41OZTG%2B1b3L._SX342_SY445_QL70_ML2_.jpg', '2022-04-13 18:00:25', '2022-04-13 18:00:25', '2022-04-13 18:00:25');

INSERT INTO `wishlist` (`id`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(4, 1, 5, '2022-04-19 16:52:30', '2022-04-19 16:52:30'),
(3, 1, 8, '2022-04-19 16:52:30', '2022-04-19 16:52:30'),
(2, 1, 4, '2022-04-19 16:52:30', '2022-04-19 16:52:30'),
(1, 1, 11, '2022-04-19 11:40:14', '2022-04-19 11:40:14');

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(15, 'Humor & Entertainment', 'humor-entertainment', NULL, NULL),
(14, 'Self-Help', 'self-help', NULL, NULL),
(13, 'Current Events', 'current-events', NULL, NULL),
(12, 'Politics & Social Sciences', 'politics-social-sciences', NULL, NULL),
(11, 'Business & Economics', 'business-economics', NULL, NULL),
(10, 'Architecture', 'architecture', NULL, NULL),
(9, 'Archaelogy', 'archaelogy', NULL, NULL),
(7, 'General Fiction', 'general-fiction', NULL, NULL),
(6, 'Children\'s & Young', 'childrens-young', NULL, NULL),
(8, 'Literature & Fiction', 'literature-fiction', NULL, NULL),
(5, 'Adult', 'adult', NULL, NULL),
(3, 'Children\'s & technology', 'childrens-technology', NULL, NULL),
(2, 'Business & Money', 'business-money', NULL, NULL),
(4, 'Parenting & families', 'parenting-families', NULL, NULL),
(1, 'Biographies & memoires', 'biographies-memoires', NULL, NULL);

INSERT INTO `category_book` (`category_id`, `book_id`) VALUES
(12, 11),(12, 9),(11, 8),(11, 7),(10, 10),(9, 10),(8, 3),(8, 1),(7, 5),(7, 4),(2, 2),(1, 6),(1, 2);
