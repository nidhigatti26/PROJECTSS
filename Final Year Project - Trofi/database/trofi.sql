-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 11:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trofi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'trofi',
  `status` varchar(50) NOT NULL DEFAULT 'admin',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `type`, `status`, `created_at`) VALUES
(1, 'nidhi', 'nidhigatti26@gmail.com', '123456789', 'trofi', 'admin', '2021-03-30 18:05:54'),
(7, 'sanjeev kapoor', 'sanjeevkapoor@gmail.com', '123456789', 'trofi_chef', 'admin', '2021-04-19 22:05:21'),
(8, '5 Spice', '5spice_admin@gmail.com', '123456789', 'my_restaurant', 'admin', '2021-04-19 22:31:47'),
(9, 'Naturals', 'naturals_admin@gmail.com', '123456789', 'my_restaurant', 'admin', '2021-04-19 22:32:08'),
(10, 'Urban Tadka', 'urbantadka_admin@gmail.com', '123456789', 'my_restaurant', 'admin', '2021-04-19 22:33:02'),
(12, 'Frizzle', 'frizzle_admin@gmail.com', '123456789', 'my_restaurant', 'admin', '2021-04-19 22:35:49'),
(13, 'Shawrya', 'hitchki_admin@gmail.com', '123456789', 'my_restaurant', 'admin', '2021-05-07 18:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`) VALUES
(1, 'Appetizers', '2021-03-17 14:35:53'),
(2, 'Main_Course', '2021-03-17 14:35:53'),
(3, 'Breakfast', '2021-03-17 14:36:44'),
(4, 'Soups', '2021-03-17 14:36:44'),
(5, 'Salad', '2021-03-17 14:37:03'),
(6, 'Dessert', '2021-03-17 14:37:03'),
(7, 'Beverages', '2021-03-17 14:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `dasher`
--

CREATE TABLE `dasher` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(200) NOT NULL,
  `time_slot` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `rest_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `disc` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `rest_id`, `name`, `price`, `disc`, `image`, `created_at`) VALUES
(9, '5', 'Crab', '350', 'Try this gorgeous tasting recipe and you will love it. You can serve it with Rice or Dosa.  It is a ', 'images/5spice2.png', '2021-04-19 22:43:02'),
(10, '5', 'Momos', '90', 'Momos are popular street food in northern parts of India. These are also known as Dim Sum and are ba', 'images/5spice3.png', '2021-04-19 22:44:23'),
(12, '7', 'Mango scoop', '70', 'Ice cream flavored with the King of Fruits! Mangoes impart a luscious creamy texture and rich flavor', 'images/naturals4.png', '2021-04-19 22:52:44'),
(13, '9', 'Pizza', '300', 'Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combina', 'images/fusion4.png', '2021-04-19 23:00:00'),
(14, '9', 'Butter Chicken', '340', 'A typical curry from the Indian subcontinent consists of chicken stewed in an onion- and tomato-base', 'images/butterchicken2.jfif', '2021-04-19 23:02:54'),
(15, '8', 'Strawberry Milkshake', '80', 'Homemade strawberry milkshake is so rich and creamy, with an amazing fresh strawberry taste. Its egg', 'images/strawberrymilkshake.jfif', '2021-04-19 23:27:09'),
(16, '8', 'Nutella Shake', '95', 'Jump to Recipe ... And then I suddenly thought of trying to do a Nutella one. ... I made a vanilla i', 'images/frizzle4.png', '2021-04-19 23:29:01'),
(18, '7', 'mango', '150', 'axasjgbxa', 'images/naturals4.png', '2021-05-02 13:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `del_address` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT 'Order Received'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`id`, `res_id`, `pro_id`, `user_id`, `del_address`, `qty`, `total`, `created_at`, `status`) VALUES
(36, 5, 9, 9, 'Sector 16,R.No-205,B-Wing,Shree Appartment,Murbadevi Rd,Ghansoli,', 1, 350, '2021-04-19 23:30:25', 'Order delivered'),
(41, 7, 11, 7, 'Sector 16,R.No-205,B-Wing,Shree Appartment,Murbadevi Rd,Ghansoli,', 1, 50, '2021-04-20 10:57:27', 'Order Received'),
(42, 5, 9, 1, 'Sector 16,R.No-205,B-Wing,Shree Appartment,Murbadevi Rd,Ghansoli,', 1, 350, '2021-04-20 11:00:34', 'Order Received'),
(43, 7, 11, 1, 'Sector 16,R.No-205,B-Wing,Shree Appartment,Murbadevi Rd,Ghansoli,', 1, 50, '2021-04-20 11:00:51', 'Order delivered'),
(44, 5, 9, 1, '', 1, 350, '2021-05-02 13:08:55', 'Order Received'),
(46, 7, 12, 13, '', 1, 70, '2021-05-07 18:18:02', 'Order delivered');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `ingredient` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `recipe_id`, `ingredient`, `qty`, `created_at`) VALUES
(43, 10, 'green peppers', '2 medium', '2021-04-19 22:03:04'),
(44, 10, ' sweet red pepper', '1 medium', '2021-04-19 22:03:04'),
(45, 10, 'sweet yellow pepper', '1 medium', '2021-04-19 22:03:04'),
(46, 10, 'plum tomatoes, seeded and chopped', '2 medium', '2021-04-19 22:03:04'),
(47, 10, ' finely chopped onion', '1/3 cup', '2021-04-19 22:03:05'),
(48, 10, 'ground cumin', '1 cup', '2021-04-19 22:03:05'),
(49, 10, 'cooked rice ', '1-1/2 cups ', '2021-04-19 22:03:05'),
(50, 10, 'shredded Monterey ', '1/2 cup ', '2021-04-19 22:03:05'),
(51, 10, ' cheese ', '1/4 cup ', '2021-04-19 22:03:05'),
(52, 10, ' hot pepper sauce', '1/4 teaspoon', '2021-04-19 22:03:05'),
(53, 13, 'kashmiri red chili powder', '2 teaspoons ', '2021-04-19 23:53:39'),
(54, 13, ' coriander powder', '1 teaspoon', '2021-04-19 23:53:39'),
(55, 13, ' turmeric powder', '½ teaspoon', '2021-04-19 23:53:39'),
(56, 13, ' garam masala powder', '½ teaspoon', '2021-04-19 23:53:39'),
(57, 13, 'cumin powder', '1 teaspoon ', '2021-04-19 23:53:39'),
(58, 13, ' dry mango powder (amchur)', '1 teaspoon', '2021-04-19 23:53:39'),
(59, 13, ' ajwain (carom seeds)', '1 teaspoon ', '2021-04-19 23:53:39'),
(60, 13, ' chaat masala', '1 teaspoon', '2021-04-19 23:53:39'),
(61, 13, ' black pepper powder', '½ teaspoon', '2021-04-19 23:53:39'),
(62, 13, 'cayenne pepper.', '1 teaspoon ', '2021-04-19 23:53:39'),
(63, 14, ' whole wheat flour', '1 cup levelled', '2021-04-20 00:02:27'),
(64, 14, ' salt', '1 pinch', '2021-04-20 00:02:27'),
(65, 14, ' levelled baking powder', '1 teaspoon', '2021-04-20 00:02:28'),
(66, 14, ' cinnamon powder', '¼ teaspoon', '2021-04-20 00:02:28'),
(67, 14, ' sugar', '3 teaspoons', '2021-04-20 00:02:28'),
(68, 14, ' milk', '1 cup', '2021-04-20 00:02:28'),
(69, 14, 'unsalted butter', '1 tablespoon ', '2021-04-20 00:02:28'),
(70, 15, 'chopped mix fruits', '2 to 2.5 cups', '2021-04-20 10:54:02'),
(71, 15, 'whole milk', '1.5 cups ', '2021-04-20 10:54:03'),
(72, 15, ' custard powder', '3 tablespoon', '2021-04-20 10:54:03'),
(73, 15, 'warm whole milk', '3 tablespoon ', '2021-04-20 10:54:03'),
(77, 17, '2 teaspoon sabja seeds (sweet basil seeds) ', 'soaked in ¾ cup wate', '2021-05-07 16:11:30'),
(78, 17, ' falooda sev cooked ', '3 tablespoon', '2021-05-07 16:11:31'),
(79, 17, 'rose syrup', '3 to 4 tablespoon ', '2021-05-07 16:11:31'),
(80, 17, 'mango puree', '½ to ⅔ cup ', '2021-05-07 16:11:31'),
(81, 17, 'chilled milk', '2 to 2.5 cups ', '2021-05-07 16:11:31'),
(82, 17, 'chopped or sliced pistachios', '1 tablespoon ', '2021-05-07 16:11:31'),
(83, 17, 'mango ice cream or vanilla ice cream', '3 to 4 scoops ', '2021-05-07 16:11:31'),
(84, 17, ' mango, peeled and chopped in small cubes', '1 medium sized each', '2021-05-07 16:11:31'),
(85, 18, 'corn cob', '1 medium to large si', '2021-05-07 16:18:12'),
(86, 18, ' freshly ground or crushed black pepper', '½ teaspoon', '2021-05-07 16:18:12'),
(87, 18, ' chopped celery', '1 teaspoon', '2021-05-07 16:18:12'),
(88, 18, ' chopped spring onions ', '1 tablespoon', '2021-05-07 16:18:12'),
(89, 18, ' oil', '1 tablespoon', '2021-05-07 16:18:12'),
(90, 18, 'veg stock ', ' 1.5 cups ', '2021-05-07 16:18:12'),
(91, 18, 'salt', '½  tablespoon ', '2021-05-07 16:18:12'),
(92, 18, ' corn starch (corn flour) ', '½ tablespoon', '2021-05-07 16:18:12'),
(93, 19, ' mascarpone cheese', '200 grams', '2021-05-07 18:07:18'),
(94, 19, ' powdered sugar', '6 tablespoons', '2021-05-07 18:07:19'),
(95, 19, ' vanilla extract ', '1 teaspoon', '2021-05-07 18:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_order`
--

CREATE TABLE `ingredient_order` (
  `id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `del_address` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT 'Order Received'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredient_order`
--

INSERT INTO `ingredient_order` (`id`, `rec_id`, `user_id`, `del_address`, `qty`, `total`, `created_at`, `status`) VALUES
(11, 15, 9, 'Sector 16,R.No-205,B-Wing,Shree Appartment,Murbadevi Rd,Ghansoli,', 2, 400, '2021-04-20 10:54:50', 'Order delivered'),
(13, 19, 1, '', 2, 300, '2021-05-07 18:08:17', 'Order Received');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `field` varchar(100) NOT NULL,
  `knowledge` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_website` varchar(100) NOT NULL,
  `net_worth` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `investment` varchar(100) NOT NULL,
  `contry` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `direction` text NOT NULL,
  `categories` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `youtube` varchar(150) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `price` varchar(150) NOT NULL,
  `pic2` varchar(100) DEFAULT NULL,
  `pic3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `info`, `direction`, `categories`, `user_id`, `username`, `youtube`, `pic1`, `status`, `created_at`, `price`, `pic2`, `pic3`) VALUES
(10, 'Bell Pepper Nachos', '\"Pepper pieces hold a savory cheese and rice topping in this colorful appetizer,\" says Aneta Kish of La Crosse, Wisconsin.', 'Cut peppers into 1-1/2- to 2-in. squares. Cut each square in half diagonally to form two triangles; set aside. In a lightly greased skillet, cook the tomatoes, onion, chili powder and cumin over medium heat for 3 minutes or until onion is tender, stirring occasionally.\r\nRemove from the heat. Stir in the rice, Monterey Jack cheese, cilantro and hot pepper sauce. Spoon a heaping tablespoon onto each pepper triangle. Place on greased baking sheets. Sprinkle with cheddar cheese.\r\nBroil 6-8 in. from the heat for 3-4 minutes or until cheese is bubbly and rice is heated through.', 'Appetizers', 9, 'nidhi', 'https://www.youtube.com/watch?v=7xGonoCF924', 'images/peppernachos.jfif', 'approved', '2021-04-19 21:59:29', '150', 'images/peppernachos.jpg', 'images/peppernachos2.jpg'),
(13, 'Paneer Tikka', 'Paneer Tikka is a popular and delicious tandoori snack where paneer (Indian cottage cheese cubes) are marinated in a spiced yogurt-based marinade, arranged on skewers and grilled in the oven.', '1. Peel, rinse and dice 1 medium-sized onion in square shaped 1 to 1.5 inches pieces. Rinse and slice 1 small to medium sized capsicum (green bell pepper) in 1 to 1.5 inches pieces. You will need ½ cup each of onions and capsicum. Keep aside. You can also use tomatoes if you want.\r\n2. Crush 1.5 inches ginger and 6 to 7 small to medium sized garlic to a fine paste in a mortar-pestle. You will need 1 tablespoon of crushed ginger-garlic or 1 tablespoon of ready ginger-garlic paste.\r\n3. Slice 200 to 250 grams block or paneer into cubes or squares and keep aside. Best is to use homemade paneer.\r\n', 'Main_Course', 7, 'akshu', 'https://www.youtube.com/watch?v=c-oVDb-O2Q8', 'images/paneertikka.jpg', 'approved', '2021-04-19 23:50:45', '300', 'images/paneertikka1.jpg', 'images/paneertikka3.jpg'),
(14, 'Pan Cake', 'Eggless pancakes recipe with step-by-step pics. It is possible to make the best pancakes which are fluffy, light, and soft and yet made with whole wheat flour and without eggs.', '1. In a mixing bowl first take 1 cup whole wheat flour. if the wheat flour is ground in a mill, then do sieve the flour once or twice before using.\r\n2. Add 1 pinch salt. Skip adding salt if using salted butter.\r\n3. Add 3 teaspoons sugar. You can even add 1 to 2 teaspoons sugar or skip it entirely.\r\n4. Add 1 teaspoon baking powder.\r\n5. Add ¼ teaspoon cinnamon powder. You can even add ¼ teaspoon vanilla essence or ½ teaspoon vanilla extract.\r\n5. Add ¼ teaspoon cinnamon powder. You can even add ¼ teaspoon vanilla essence or ½ teaspoon vanilla extract.\r\n6. With a wired whisk mix all the dry ingredients very well. Keep aside.', 'Breakfast', 7, '', 'https://www.youtube.com/watch?v=gk4Do47MAG4', 'images/pancake.jfif', 'approved', '2021-04-19 23:59:53', '180', 'images/pancake1.jfif', 'images/pancake2.jfif'),
(15, 'Trifle', 'Trifle recipe – easy and tasty trifle pudding made with mixed fruits.\r\n', '\r\nWarm 3 tbsp milk in a microwave or in a small steel bowl on the stove top. Then add 3 tbsp custard powder to the warm milk. Keep this custard powder paste aside.Stir and dissolve the custard powder very well in the milk. There should be no lumps.In another pan, take 1.5 cups milk. Then add 4 tbsp sugar.Stir and heat this milk+sugar solution on a low to medium flame. Just bring to a gentle heat and stir so that the sugar dissolves.Bring the flame to low. Then add the custard powder paste and stir quickly with a wired whisk, so that no lumps are formed. Keep on stirring till the custard thickens. Usually for trifles, I make a thick custard. But if you want a slightly smooth and flowing consistency, you can keep that. Allow the custard to cool at room temperature.In another bowl, take ½ cup chilled cream. I used amul cream here. You can use whipping cream or a 25% to 50% low fat cream. Add ¼ tsp vanilla extract.With an electric beater or in a stand mixer, whip the cream till you get soft peaks.Here the cream has got soft peaks. Keep this whipped cream in the refrigerator. Then slice and chop the fruits. You can use any seasonal fruits. Just avoid citrus fruits and melons.\r\n', 'Dessert', 9, 'nidhi', 'https://www.youtube.com/watch?v=Tg0t6ncaFQY', 'images/triflepudding.jfif', 'approved', '2021-04-20 10:52:38', '200', 'images/triflepudding1.jfif', 'images/triflepudding2.jfif'),
(17, 'Mango Falooda', 'This mango falooda is a kind of death by mangoes as one of my friends pointed out, or you can also say mango heaven. Mango puree, chopped mangoes and mango ice cream all go into it. The rose syrup, milk and Sabja seeds give a lovely cooling touch. This is a very simple recipe without the addition of mango custard and mango jelly. Though if you want, you can add both mango custard and jelly.', 'First soak 2 tsp sabja seeds (sweet basil seeds) in 3/4 cup water for about 20 to 30 minutes.\r\nLater strain them with a tea strainer and keep aside.\r\nThen prepare the falooda sev according to package instructions. \r\nIf you need to cook them then do boil them in water till they are cooked completely & softened.\r\nRinse the cooked falooda sev in water and then drain them. Keep aside covered. allow them to cool completely at room temperature.', 'Beverages', 1, 'nidhi', 'https://www.youtube.com/watch?v=h6oQuHyM8Cw', 'images/mangofalooda1.jfif', 'approved', '2021-05-07 16:08:40', '180', 'images/mangofalooda.jfif', 'images/mangofalooda2.jfif'),
(18, 'Sweet corn soup', 'The recipe of sweet corn soup was always requested by my parents and sis when they wanted me to cook Indo-Chinese food for them. So during the vacations when the cooking fairy would inspire me, I would end up cooking a lot of stuff apart from Indo-Chinese recipes.', 'Heat oil or butter in a pan. Saute the spring onions if using them till they become transparent.\r\nAdd the chopped celery and saute for a minute. Add the corn paste and stir. Add water or milk+water or veg stock. Stir and allow the soup to come to a boil.\r\nNow add the black pepper & salt & the remaining corn kernels. Stir & simmer for 2-3 minutes.\r\nAdd the cornflour paste. Stir and simmer for 2-3 minutes more till the soup thickens and the cornflour gets cooked.\r\nCheck the seasoning and serve hot sweet corn soup.\r\nYou can garnish the soup with some chopped celery or spring onions greens.\r\nIt goes very well with some garlic or toasted bread.', 'Soups', 7, 'nidhi', 'https://www.youtube.com/watch?v=VWfFqZkLs6Y', 'images/cornsoup.jfif', 'approved', '2021-05-07 16:16:09', '60', 'images/cornsoup1.jfif', 'images/cornsoup2.jfif'),
(19, 'Tiramisu', 'Tiramisu recipe with step by step photos. Tiramisu is a famous Italian dessert. the tiramisu recipe shared here is an easy tiramisu recipe made without eggs and alcohol. This tiramisu recipe will give you one of the best tasting Italian tiramisu.\r\n', 'In an eggless tiramisu recipe, the tiramisu filling is made by making a smooth mixture of whipped mascarpone cheese, whipped cream, powdered sugar and vanilla extract.\r\nThe sponge fingers or sponge cake slices are dipped in coffee syrup. These are then layered in a glass pan or bowl. Now the mascarpone cheese+whipped cream filling mixture is spread evenly on the sponge fingers. \r\nIn a similar way 1 to 2 more layers of the coffee syrup soaked sponge fingers and mascarpone cheese+whipped cream are made. \r\nThe top layer is of the mascarpone cheese+whipped cream which is dusted with some cocoa powder. \r\nThe tiramisu is ready now and has to be refrigerated for 4 to 5 hours or overnight for it to set. After the tiramisu is set, you can slice it and serve as a dessert.\r\n', 'Dessert', 1, '', 'https://www.youtube.com/watch?v=7VTtenyKRg4', 'images/tiramisu.jfif', 'approved', '2021-05-07 18:06:12', '150', 'images/tiramisu1.jfif', 'images/tiramisu2.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `phoneno` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `cpassword` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `uname`, `phoneno`, `email`, `password`, `cpassword`, `created_at`, `address`) VALUES
(9, 'nidhi', 'gatti', 'nidhi', '9594350822', 'nidhigatti26@gmail.com', 'nidhi123', 'nidhi123', '2021-04-19 16:19:34', 'Sector 16,R.No-205,B-Wing,Shree Appartment,Murbadevi Rd,Ghansoli,'),
(10, 'akshata', 'poojari', 'akshu', '7894561235', 'akshu123@gmail.com', 'akshu123', 'akshu123', '2021-04-19 18:08:09', 'Ghatkopar-West');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(150) NOT NULL,
  `location` varchar(200) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `discription` text NOT NULL,
  `logo` varchar(150) NOT NULL,
  `pic1` varchar(100) DEFAULT NULL,
  `pic2` varchar(100) DEFAULT NULL,
  `pic3` varchar(100) DEFAULT NULL,
  `pic4` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `owner` varchar(100) NOT NULL,
  `Menu` varchar(300) DEFAULT NULL,
  `Menu2` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `category`, `location`, `from`, `to`, `discription`, `logo`, `pic1`, `pic2`, `pic3`, `pic4`, `created_at`, `owner`, `Menu`, `Menu2`) VALUES
(5, '5 Spice', 'Chinese,Sea-Food', 'Vile Parle West', '09:00:00', '20:10:00', '₹1,100 for two people (approx.)\r\n\r\nExclusive of applicable taxes and charges, if any', 'images/5spice5.png', 'images/5spice2.png', 'images/5spice1.png', 'images/5spice3.png', 'images/5spice4.png', '2021-04-19 22:14:08', '5spice_admin@gmail.com', 'images/5spicemenu1.png', 'images/5spicemenu2.png'),
(7, 'Naturals', 'Dessert', 'Vashi, Navi Mumbai', '07:00:00', '00:30:00', '₹300 for two people (approx.)\r\n\r\nExclusive of applicable taxes and charges, if any', 'images/naturals5.png', 'images/naturals1.png', 'images/naturals2.png', 'images/naturals3.png', 'images/naturals4.png', '2021-04-19 22:21:36', 'naturals_admin@gmail.com', 'images/naturalsmenu1.png', 'images/naturalsmenu2.png'),
(8, 'Frizzle', 'Beverages', 'Thane,Mumbai', '10:00:00', '20:00:00', '₹150 for one order (approx.)\r\n\r\nExclusive of applicable taxes and charges, if any', 'images/frizzle5.png', 'images/frizzle.png', 'images/frizzle2.png', 'images/frizzle1.png', 'images/frizzle7.png', '2021-04-19 22:26:09', 'frizzle_admin@gmail.com', 'images/frizzlemenu1.png', 'images/frizzlemenu2.png'),
(9, 'Urban Tadka', 'North-Indian,Italian', 'Mulund West\r\n', '12:00:00', '00:00:00', '₹1,500 for two people (approx.) Without alcohol\r\n\r\nExclusive of applicable taxes and charges, if any', 'images/urbantk5.png', 'images/urbantk.png', 'images/urbantk1.png', 'images/urbantk2.png', 'images/urbantk4.png', '2021-04-19 22:30:39', 'urbantadka_admin@gmail.com', 'images/urbantkmenu1.png', 'images/urbantkmenu2.png'),
(10, 'Hitchki', 'beverages,Italian', 'Mumbai', '08:00:00', '21:00:00', '₹1,700 for two people (approx.) with alcohol.Exclusive of applicable taxes and charges, if any', 'images/hitchki5.png', 'images/hitchki.png', 'images/hitchki6.png', 'images/hitchki2.png', 'images/hitchki.png', '2021-05-07 18:13:55', 'hitchki_admin@gmail.com', 'images/hitchkimenu1.png', 'images/hitchkimenu2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dasher`
--
ALTER TABLE `dasher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient_order`
--
ALTER TABLE `ingredient_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `owner` (`owner`),
  ADD UNIQUE KEY `owner_2` (`owner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dasher`
--
ALTER TABLE `dasher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `ingredient_order`
--
ALTER TABLE `ingredient_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
