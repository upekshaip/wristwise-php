-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 08:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(512) NOT NULL,
  `shortDescription` varchar(128) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `availableCount` int(16) NOT NULL,
  `photo` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `name`, `description`, `shortDescription`, `price`, `discount`, `availableCount`, `photo`) VALUES
(102, 'Thammattama', 'It features a wooden body covered with animal skin and is played by striking the skin with two sticks.', 'Weight-3.458 kg\r\nColor-not have a specific color', 31272, 0, 8, 'https://upekshaip.me/web-final/resources/img/products/102.jpg'),
(103, 'Yak bere', 'The Yak Beraya is a fashionable and versatile clothing item that blends traditional and contemporary styles.', 'Weight-0.876 kg\r\nColor-not have a specific color\r\n', 45344.5, 0, 6, 'https://upekshaip.me/web-final/resources/img/products/103.jpeg'),
(104, 'Thablawa', 'Tabla is a pair of hand drums used in Indian music, consisting of a smaller drum (dayan/tabla) and a larger drum (bayan).', 'Weight-7.561 kg\r\nColor- wood and often have a natural brown color.\r\n', 30959.3, 0, 14, 'https://upekshaip.me/web-final/resources/img/products/104.jpg'),
(105, 'Gata beraya', 'The drum has two heads. One head is covered with ox skin, and the other is covered with monkey skin to create different pitches.', 'Weight-8 kg\r\nColor- black,natural brown color.\r\n', 49700, 0, 9, 'https://upekshaip.me/web-final/resources/img/products/105.jpeg'),
(201, 'Brass agal vilakku attach with tray', 'This vilakku is an ideal piece for your home and temple. It is designed to allow easy cleaning and refilling of oil. Made from pure brass.', 'Weight- 0.024 kg\r\nColor- brass gold\r\n', 207.4, 0, 25, 'https://upekshaip.me/web-final/resources/img/products/201.jpg'),
(202, 'set of 2 Brass metal Kuber diya Oil Lamps', 'Original Brass Metal Kuber Diya, an ideal addition for Puja and Aarti. Gives extra safety while lighting it. It is widely used during Pooja, Aarti, Welcome and in Wedding Ceremonies as well.', 'Weight-0.045kg\r\nColor- brass gold\r\n', 5628.96, 0, 26, 'https://upekshaip.me/web-final/resources/img/products/202.jpg'),
(203, 'Brass Oil Lamp ', 'Made from premium quality brass material for long time use. Suitable for indoor use only.', 'Weight-0.458 kg\r\nColor- brass gold\r\n', 4065.39, 0, 6, 'https://upekshaip.me/web-final/resources/img/products/203.jpg'),
(204, 'Brass metal Aladdin lamp', 'Metal aladdin lamp makes a great gift for any occasion. Suitable for indoor use only. This item ships fully assembled in one piece.', 'Weight-0.396kg\r\nColor- brass gold\r\n', 3596.27, 0, 17, 'https://upekshaip.me/web-final/resources/img/products/204.jpg'),
(301, 'Lamp Holder', 'This lamp holder is totally made by coconut shells and it has a simple design. This is suitable as a home decorator. Also you can use it as a gift.', 'Weight–150 g\r\nColor–Black\r\n', 950, 0, 50, 'https://upekshaip.me/web-final/resources/img/products/301.jpg'),
(302, 'Table Lamp', 'This table lamp is totally made by coconut shells and we have various design collection of the table lamps. This is suitable as a home decorator or you can use it as a gift.', 'Weight–150 g\r\nColor–Brown\r\n', 1450, 5, 36, 'https://upekshaip.me/web-final/resources/img/products/302.jpg'),
(303, 'Valentine Gift', 'These are totally made by coconut shells and we have various design collection and you can choose from them a gift for your loved ones.', 'Weight–140 g\r\nColor–Brown and Black\r\n', 1500, 5, 45, 'https://upekshaip.me/web-final/resources/img/products/303.jpg'),
(304, 'Gifts Collection', 'This gifts collection is totally made by coconut shells and we have various design collection in this gifts collection. Pen holders , tea cups , different kind of statues , soap holders are some of the items that gifts collection has.', 'Weight–120g to 160 g\r\nColor–Black and Brown\r\n', 1150, 10, 49, 'https://upekshaip.me/web-final/resources/img/products/304.jpg'),
(305, 'Flower Vase', 'This flower vase is totally made by coconut shells and we have various design collection of the flower vases. This is suitable as a home decorator or you can use it as a gift.', 'Weight–140 g\r\nColor–Black\r\n', 950, 0, 23, 'https://upekshaip.me/web-final/resources/img/products/305.jpg'),
(306, 'Decorating Lamps', 'These decorating lamps are totally made by coconut shells and it has a simple design. we have various design collection of the decorating lamps. This is suitable as decorator of the function or your home garden.', 'Length–2.5 m\r\nColor–Brown\r\n', 750, 10, 15, 'https://upekshaip.me/web-final/resources/img/products/306.jpg'),
(307, 'Holders', 'This holders are totally made by coconut shells. You can use these as a jewellery holder , soap holder etc or you can use it as a gift.', 'Weight–100 g\r\nColor–Black and Brown\r\n', 550, 0, 9, 'https://upekshaip.me/web-final/resources/img/products/307.png'),
(308, 'Cups', 'These cups are totally made by coconut shells and we have various design collection of the cups. This is suitable as a dessert cups or you can use it as a gift.', 'Weight–100 g\r\nColor–Black\r\n', 250, 0, 50, 'https://upekshaip.me/web-final/resources/img/products/308.jpg'),
(309, 'Buttons', 'These Buttons are totally made by coconut shells and we have various design collection of the buttons. These buttons can use for your dresses.', 'Weight–10 g\r\nColor–Black and Brown\r\n', 20, 0, 123, 'https://upekshaip.me/web-final/resources/img/products/309.jpg'),
(310, 'Hair Clips', 'These hair clips are totally made by coconut shells and we have various design collection. You can use it for your hair or you can use it as a gift for your loved ones.', 'Weight–25 g\r\nColor–Black and Yellow\r\n', 450, 0, 52, 'https://upekshaip.me/web-final/resources/img/products/310.jpg'),
(401, 'Printed wooden Key tags', 'This key tag has three shapes and they are circle , square and heart shapes. In this key tag we print text , photos as you want and it can be customized as you wish.', 'Weight–25 g\r\nColor–One side black and one side wooden\r\n', 450, 0, 18, 'https://upekshaip.me/web-final/resources/img/products/401.jpg'),
(402, 'Valentine wooden Key tags', 'This key tag has heart shape and various designs. This is the best gift for your loved ones. In this key tag we print text , date as you want , it can be customized as you wish.', 'Weight–25 g\r\nColor–Both sides wooden\r\n', 550, 5, 17, 'https://upekshaip.me/web-final/resources/img/products/402.jpg'),
(403, 'Bar wooden Key tags', 'This key tag can use for your vehicle keys  or you can use it as a birthday gift .In this key tag we print text , date , quotes as you wanted , it can be customized as you wish.', 'Weight–25 g\r\nColor–White and Wooden\r\n', 380, 0, 29, 'https://upekshaip.me/web-final/resources/img/products/403.jpeg'),
(405, 'Customized wooden Key tags', 'This key tag has a special feature that is you can be customized its shape as you want. In this key tag we have various design collections and you can select one of them and you can be customized its shape as you wish.', 'Weight–25 g\r\nColor–White and Wooden\r\n', 530, 0, 26, 'https://upekshaip.me/web-final/resources/img/products/405.jpeg'),
(501, 'Pot with Lid', 'These pots and lids are totally made by clay and these are suitable to cook in gas cooker.', 'Weight–150 g\r\nColor–Brown\r\n', 550, 0, 6, 'https://upekshaip.me/web-final/resources/img/products/501.jpg'),
(502, 'Mugs', 'These mugs are totally made by clay and we have various design collection of the mugs. You can use it as a gift.', 'Weight–90 g\r\nColor–White(inside the mug) and Yellow, Pink, Gold, Silver, blue, White, Green(outside the mug)\r\n', 450, 5, 56, 'https://upekshaip.me/web-final/resources/img/products/502.jpg'),
(503, 'Tea Pot and Cup Set', 'These tea pot and cup set are totally made by clay and we have various design collection. These are suitable for serving tea for guests or as a gift for your loved ones.', 'Weight–1.5 kg(Total set)\r\nColor–White(inside) and Yellow, Pink, Gold, Silver, blue, White, Green(outside)\r\n', 15500, 10, 27, 'https://upekshaip.me/web-final/resources/img/products/503.jpg'),
(504, 'Money Box', 'This money box is totally made by clay and this is suitable for kids to teaching how to saving money. This has attractive appearance and we have a lot of design collection.', 'Weight–150 g\r\nColor–Brown\r\n', 500, 5, 60, 'https://upekshaip.me/web-final/resources/img/products/504.jpg'),
(505, 'Ceramic Pots and Bowls', 'These ceramic pots and bowls are totally made by clay and we have various design collection. This is suitable to cook in gas cooker. You can use these items as a gift.', 'Weight–1.5 kg(Total set)\r\nColor–Brown and Black\r\n', 12500, 10, 9, 'https://upekshaip.me/web-final/resources/img/products/505.jpeg'),
(506, 'Ceramic Jug and Cup set', ' These ceramic jug and cup set are totally made by clay and we have various design collection. These are suitable for serving tea for guests. You can use these items as a gift.', 'Weight–1.5 kg(Total set)\r\nColor–Brown with a design\r\n', 10500, 10, 20, 'https://upekshaip.me/web-final/resources/img/products/506.jpg'),
(601, 'Serving Spoons set ', 'Made of single wood with no other wood parts attached. Suitable for cooking and preparing food.', 'Weight-each 0.15 kg\r\nColor- natural wooden color\r\n', 999.99, 5, 45, 'https://upekshaip.me/web-final/resources/img/products/601.jpg'),
(602, 'Couple Serving spoons ', 'Made of single wood with no other wood parts attached. Suitable for cooking and preparing food.', 'Weight-0.27kg\r\nColor- natural wooden color\r\n', 699.99, 0, 62, 'https://upekshaip.me/web-final/resources/img/products/602.jpeg'),
(603, 'Single Serving spoons', 'Made of single wood with no other wood parts attached. Suitable for cooking and preparing food.', 'Weight-0.08 kg\r\nColor- natural wooden color\r\n', 99.99, 0, 105, 'https://upekshaip.me/web-final/resources/img/products/603.jpg'),
(604, 'Small children eat spoon set', 'Made of single wood with no other wood parts attached. Very suitable for small children to eat.', 'Weight- each 0.05 kg\r\nColor- natural wooden color\r\n', 799.99, 5, 50, 'https://upekshaip.me/web-final/resources/img/products/604.jpg'),
(701, 'Radha and Krishna pure brass Idol', 'Radha-Krishna is together known within Hindu mythology as the combined forms of the feminine as well as the masculine realities of God. Radha is considering as shakti of Lord Krishna.  ', 'Weight-both 1.15 kg\r\nColor- brass gold\r\n', 2750, 5, 6, 'https://upekshaip.me/web-final/resources/img/products/701.jpg'),
(702, 'Bronze copper Horse and Rabbit ', 'It is the ideal decorative plant to keep your garden beautiful and attractive.', 'Weight- 5.15 kg\r\nColor- natural wooden color\r\n', 999.99, 5, 4, 'https://upekshaip.me/web-final/resources/img/products/702.jpg'),
(703, 'Wood and Brass Men and Women ', 'Wood and brass men and women figurines are handcrafted artworks that showcase the combination of natural wood and lustrous brass, representing cultural diversity, craftsmanship, and aesthetic appeal.', 'Weight-both 0.98 kg\r\nColor- natural wooden color and brass gold\r\n', 5800, 5, 8, 'https://upekshaip.me/web-final/resources/img/products/703.jpg'),
(704, 'Retro Meditating Statue', 'The Retro Meditating Statue depicts a serene figure in a classic meditative pose, representing inner peace, mindfulness, and spiritual awakening. It adds a tranquil touch to any space.', 'Weight-each 0.15 kg\r\nColor- brass gold\r\n', 999.99, 0, 18, 'https://upekshaip.me/web-final/resources/img/products/704.jpg'),
(705, 'Brass peacock ', 'The peacock idol represents beauty, grace, and immortality in Hindu mythology. It is associated with the goddess Saraswati and Lord Murugan.', 'Weight- 0.95 kg\r\nColor- brass gold\r\n', 989.99, 5, 9, 'https://upekshaip.me/web-final/resources/img/products/705.jpg'),
(706, 'Brass Eagle leg ', 'The eagle leg idol represents the majestic and powerful nature of eagles, symbolizing freedom, strength, and keen observation skills.', 'Weight- 0.75 kg\r\nColor- Shiny Brass gold \r\n', 1299.99, 5, 7, 'https://upekshaip.me/web-final/resources/img/products/706.jpg'),
(707, 'Brass Hanumantha Idol ', 'Hanumantha Idol is a depiction of Lord Hanuman, the Hindu monkey deity known for his strength and devotion to Lord Rama. It symbolizes power, courage, and unwavering loyalty.', 'Weight- 1.15 kg\r\nColor- Brass gold\r\n', 2399.99, 5, 0, 'https://upekshaip.me/web-final/resources/img/products/707.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=708;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
